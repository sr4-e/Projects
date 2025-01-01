document.getElementById('loginForm').addEventListener('submit', function(event)
{
    event.preventDefault(); // منع إرسال النموذج الإفتراضي
   // بيانات تسجيل الدخول الصحيحة
    const correctEmail = 'samrezzi19@gmail.com';
    const correctPassword ='2004';

    // الحصول على المدخلات من النموذج
     const email= document.getElementById('email').value;
     const password = document.getElementById('password').value;

     //التحقق من صحة بيانات الدخول 
     if(email === correctEmail && password ===correctPassword) {
        //إعادة توجيه المستخدم إلى الصفحة الرئيسية
        window.location.href='project.html';
     }
     else{
        //عرض رسالة خطأ في حالة كانت البيانات غير صحيحة 
        document.getElementById('errorMessage').textContent='Invalid username or password!';


     }

});
