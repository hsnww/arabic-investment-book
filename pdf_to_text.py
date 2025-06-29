import fitz  # PyMuPDF
import os
from PIL import Image, ImageEnhance, ImageFilter
import pytesseract
import arabic_reshaper
from bidi.algorithm import get_display
import re

# تعيين مسار Tesseract
pytesseract.pytesseract.tesseract_cmd = r'C:\Program Files\Tesseract-OCR\tesseract.exe'

def pdf_to_images(pdf_path, output_dir="temp_images"):
    """تحويل PDF إلى صور"""
    if not os.path.exists(output_dir):
        os.makedirs(output_dir)
    
    # فتح PDF باستخدام PyMuPDF
    pdf_document = fitz.open(pdf_path)
    images = []
    
    for page_num in range(len(pdf_document)):
        page = pdf_document.load_page(page_num)
        # تحويل الصفحة إلى صورة بجودة عالية جداً
        pix = page.get_pixmap(matrix=fitz.Matrix(4, 4))  # تكبير 4x للحصول على جودة أفضل
        image_path = os.path.join(output_dir, f"page_{page_num + 1}.png")
        pix.save(image_path)
        images.append(image_path)
        print(f"تم حفظ الصفحة {page_num + 1} كصورة: {image_path}")
    
    pdf_document.close()
    return images

def enhance_image(image):
    """تحسين جودة الصورة"""
    # تحويل إلى أبيض وأسود
    image = image.convert('L')
    
    # تطبيق فلتر للحدة
    image = image.filter(ImageFilter.SHARPEN)
    
    # تحسين التباين
    enhancer = ImageEnhance.Contrast(image)
    image = enhancer.enhance(3.0)
    
    # تحسين الحدة
    enhancer = ImageEnhance.Sharpness(image)
    image = enhancer.enhance(2.0)
    
    # تحسين السطوع
    enhancer = ImageEnhance.Brightness(image)
    image = enhancer.enhance(1.1)
    
    return image

def image_to_text(image_path):
    """تحويل الصورة إلى نص باستخدام OCR"""
    try:
        # قراءة الصورة
        image = Image.open(image_path)
        
        # تحسين جودة الصورة
        enhanced_image = enhance_image(image)
        
        # إعدادات Tesseract محسنة للعربية
        custom_config = r'--oem 3 --psm 6'
        
        # محاولة استخدام اللغة العربية أولاً
        try:
            print("محاولة استخدام اللغة العربية...")
            text = pytesseract.image_to_string(enhanced_image, lang='ara', config=custom_config)
            if text.strip():
                print("✅ تم استخدام اللغة العربية بنجاح!")
                return text
            else:
                print("⚠️ اللغة العربية لم تنتج نصاً، جاري تجربة الإنجليزية...")
                text = pytesseract.image_to_string(enhanced_image, lang='eng', config=custom_config)
                print("✅ تم استخدام اللغة الإنجليزية")
                return text
        except Exception as e:
            print(f"❌ خطأ في اللغة العربية: {e}")
            print("🔄 جاري تجربة اللغة الإنجليزية...")
            text = pytesseract.image_to_string(enhanced_image, lang='eng', config=custom_config)
            print("✅ تم استخدام اللغة الإنجليزية")
            return text
        
    except Exception as e:
        print(f"❌ خطأ في معالجة الصورة {image_path}: {e}")
        return ""

def pdf_to_text_with_ocr(pdf_path, output_file="extracted_text.txt"):
    """تحويل PDF إلى نص باستخدام OCR"""
    print(f"🚀 بدء معالجة الملف: {pdf_path}")
    
    # تحويل PDF إلى صور
    images = pdf_to_images(pdf_path)
    
    # استخراج النص من كل صورة
    all_text = []
    for i, image_path in enumerate(images):
        print(f"\n📄 معالجة الصفحة {i + 1}...")
        text = image_to_text(image_path)
        if text.strip():
            all_text.append(f"=== الصفحة {i + 1} ===\n{text}\n")
        else:
            all_text.append(f"=== الصفحة {i + 1} ===\n[لا يوجد نص قابل للاستخراج]\n")
    
    # حفظ النص في ملف
    with open(output_file, 'w', encoding='utf-8') as f:
        f.write('\n'.join(all_text))
    
    print(f"\n💾 تم حفظ النص المستخرج في: {output_file}")
    
    # تنظيف الملفات المؤقتة
    for image_path in images:
        try:
            os.remove(image_path)
        except:
            pass
    
    try:
        os.rmdir("temp_images")
    except:
        pass
    
    return output_file

def preprocess_image(image):
    """تحسين جودة الصورة لتحسين دقة OCR"""
    # تحويل إلى رمادي
    gray = image.convert('L')
    
    # زيادة التباين
    enhancer = ImageEnhance.Contrast(gray)
    enhanced = enhancer.enhance(2.0)
    
    # زيادة الحدة
    sharpened = enhanced.filter(ImageFilter.SHARPEN)
    
    # زيادة السطوع قليلاً
    brightness_enhancer = ImageEnhance.Brightness(sharpened)
    brightened = brightness_enhancer.enhance(1.1)
    
    return brightened

def extract_text_from_pdf(pdf_path, output_txt_path):
    """استخراج النص من ملف PDF باستخدام OCR"""
    try:
        # فتح ملف PDF
        pdf_document = fitz.open(pdf_path)
        all_text = []
        
        print(f"جاري معالجة {pdf_path}...")
        print(f"عدد الصفحات: {len(pdf_document)}")
        
        for page_num in range(len(pdf_document)):
            print(f"معالجة الصفحة {page_num + 1}/{len(pdf_document)}")
            
            # الحصول على الصفحة
            page = pdf_document[page_num]
            
            # تحويل الصفحة إلى صورة عالية الدقة
            mat = fitz.Matrix(3.0, 3.0)  # تكبير 3x للحصول على دقة أعلى
            pix = page.get_pixmap(matrix=mat)
            
            # حفظ الصورة مؤقتاً
            img_path = f"temp_page_{page_num}.png"
            pix.save(img_path)
            
            # فتح الصورة باستخدام PIL
            image = Image.open(img_path)
            
            # تحسين جودة الصورة
            processed_image = preprocess_image(image)
            
            # استخراج النص باستخدام Tesseract
            text = pytesseract.image_to_string(processed_image, lang='ara')
            
            # تنظيف النص
            text = text.strip()
            
            if text:
                all_text.append(text)
            
            # حذف الملف المؤقت
            os.remove(img_path)
        
        # دمج جميع النصوص
        full_text = '\n\n'.join(all_text)
        
        # تنظيف إضافي للنص
        full_text = re.sub(r'\n\s*\n\s*\n', '\n\n', full_text)  # إزالة الأسطر الفارغة المتكررة
        full_text = re.sub(r'[^\u0600-\u06FF\u0750-\u077F\u08A0-\u08FF\uFB50-\uFDFF\uFE70-\uFEFF\s\.,!?;:()\[\]{}"\'-]', '', full_text)  # الاحتفاظ بالحروف العربية فقط
        
        # حفظ النص في ملف
        with open(output_txt_path, 'w', encoding='utf-8') as f:
            f.write(full_text)
        
        print(f"تم حفظ النص في {output_txt_path}")
        print(f"عدد الصفحات المعالجة: {len(pdf_document)}")
        
        # إحصائيات النص
        words = full_text.split()
        chars = len(full_text)
        print(f"عدد الكلمات: {len(words)}")
        print(f"عدد الأحرف: {chars}")
        
        return full_text
        
    except Exception as e:
        print(f"خطأ في معالجة الملف: {e}")
        return None

if __name__ == "__main__":
    # معالجة ملف 008.pdf للفصل الثالث
    pdf_file = "pdf-book/008.pdf"
    output_file = "chapter3_text.txt"
    
    if os.path.exists(pdf_file):
        text = extract_text_from_pdf(pdf_file, output_file)
        if text:
            print("\n" + "="*50)
            print("مقتطف من النص المستخرج:")
            print("="*50)
            print(text[:500] + "..." if len(text) > 500 else text)
    else:
        print(f"الملف {pdf_file} غير موجود!") 