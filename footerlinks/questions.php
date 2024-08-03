<?php include '../header/header.php' ?>
<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الأسئلة الشائعة</title>
    <link rel="stylesheet" href="questions.css">
</head>

<body>
    <div class="faq-container">


        <div class="faq-item">
            <div class="faq-header">
                متى يصل لي الطلب؟
                <img src="../img/slidedown.png" alt="Expand" class="toggle-icon">
            </div>
            <div class="faq-content">
                بعد تأكيد عملية الشراء، نقوم بشحن وإرسال المنتج عن طريق شؤكة التوصيل الخاصة بنا الى منزلكم نضمن لكم
                تسليم
                الإرساليات إلى العنوان المطلوب في مدة تتراوح بين 24 ساعة في المدن الرئيسية و 48 الى 72 ساعة في المدن
                الاخرى
                يمكنكم التواصل معنا للمزيد من المعلومات
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-header">
                هل يوجد توصيل خارج البلد؟
                <img src="../img/slidedown.png" alt="Expand" class="toggle-icon">
            </div>
            <div class="faq-content">
                حالياً شركات الشحن المتعاقد معها تقوم بالتوصيل داخل البلد ومجموعة من المدن المحددة في صفحة التوصيل يتم
                عرض
                كافة المدن التي يصل لها مندوب شركة الشحن يمككك طلب التوصيل خارج البلد من فريق المتجر عبر الواتساب للقيام
                بمعلومات وزن المنتج وتسعير وكلاء الشحن الدوليين الغير مسجلين حالياً في المتجر .
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-header">
                في حالة وجود عيب مصنعي في المنتج؟
                <img src="../img/slidedown.png" alt="Expand" class="toggle-icon">
            </div>
            <div class="faq-content">
                يجب الرجوع وقراءة سياسة الإسترجاع لمعرفة شروط الإسترجاع والإستبدال، وفي حالة وجود عيب مصنعي تم الإتفاق
                على
                إرجاعة يتم إحتساب قيمة الشحن للشركة وكذلك إعادة الشحن على العميل أما قيمة المنتج فلا يتم إحتسابة على
                العميل
                حسب سياسية الإسترجاع.
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-header">
                أريد طلب كميات كبيرة هل يوجد خصم؟
                <img src="../img/slidedown.png" alt="Expand" class="toggle-icon">
            </div>
            <div class="faq-content">
                يوفر المتجر خدمة توصيل الكميات الكبيرة في حالة الطلب وهنالك خصم يصل من 10-20٪ على بعض المنتجات يمكن
                التواصل
                المباشر معنا عبر صفحة اتصل بنا والإستفسار عن الكميات والخصم
            </div>
        </div>
        <div class="faq-item">
            <div class="faq-header">
                هل يمكنني تغيير عنوان التوصيل بعد إتمام الطلب؟
                <img src="../img/slidedown.png" alt="Expand" class="toggle-icon">
            </div>
            <div class="faq-content">
                يمكنك تغيير عنوان التوصيل بشرط أن يتم ذلك قبل شحن الطلب. إذا كنت بحاجة إلى تعديل عنوان التوصيل، يرجى
                التواصل معنا بأسرع وقت ممكن عبر صفحة اتصل بنا أو عبر الهاتف.
            </div>
        </div>
        <div class="faq-item">
            <div class="faq-header">
                ماذا أفعل إذا لم أستلم طلبي في الوقت المحدد؟
                <img src="../img/slidedown.png" alt="Expand" class="toggle-icon">
            </div>
            <div class="faq-content">
                إذا تأخرت تسليم طلبك عن الوقت المحدد، يرجى التواصل معنا على الفور عبر صفحة اتصل بنا أو عبر الهاتف للتحقق
                من حالة الطلب واتخاذ الإجراءات اللازمة.
            </div>
        </div>
    </div>
    <script>
    document.querySelectorAll('.faq-header').forEach(header => {
        header.addEventListener('click', function() {
            const content = this.nextElementSibling;
            const icon = this.querySelector('.toggle-icon');

            content.classList.toggle('show');
            icon.classList.toggle('rotate');
        });
    });
    </script>
</body>

</html>
<?php include '../footer/footer.html' ?>