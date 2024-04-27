<?php
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';

?>


<?php include_once './parts/header.php'; ?>
    <div class="contener">


        <div class="position-relstive overflow-hidden p-3 p-md-5 m-md-3 text-conter bg-light">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 fw-normal">اربح مع وليد</h1>
            <br>
            <h3 class="lead fw-normal">باقي على فتح التسجيل</h3>
            <br>
            <h3 id="#demo"></h3>
            <br>
            <h3 class="lead fw-normal">للسحب على نسحة مجانية من برنامج</h3>
            <br>
            <a class="btn btn-outline-secondary" href="#" dir="center">Coming Soon</a>
            </div>
            <div>
          
        </div>

            <ul class="list-group list-group-flush">
        <li class="list-group-item">تابع البث المباشر بالتاريخ المذكور اعلاه</li>
        <li class="list-group-item">البث عبارة عن اسئلة واجوبة حرة للجميع</li>
        <li class="list-group-item">خلال البث سيتم فتح صفحة التسجيل هذه حيث ستقوم بتسجيل بيناتك</li>
        <li class="list-group-item">بنهاية البث سيتم اختيار الفائز عشوائياً</li>
        <li class="list-group-item">الرابح سيربح نسخة مجانية من برنامج كامتازيا</li>
            </ul>
<br><br><br>
<div class="position-relstive overflow-hidden p-3 p-md-5 m-md-3 text-conter bg-light">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
<form class="mt-5" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
    <h3>الرجاء ادخال معلوماتك</h3>
  <div class="mb-3" >
    <label for="firstnm"  class="form-label">الاسم الاول</label>
    <input type="text" name="firstnm" class="form-control" id="firstnm" value="<?php echo $firstnm ?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $errors['FirstNameError'] ?></div>
  </div>
  <div class="mb-3">
    <label for="lastnm" class="form-label">اسم العائلة</label>
    <input type="text" name="lastnm" class="form-control" id="lastnm" value="<?php echo $lastnm ?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $errors['LastNameError'] ?></div>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">البريد الالكتروني</label>
    <input type="text" name="email" class="form-control" id="email" value="<?php echo $email ?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $errors['EmailError'] ?></div>
  </div>
 
  <button type="submit" name="submit" class="btn btn-primary">المشاركة بالسحب</button>
</form>
</div>
</div>


<div class="row mb-5 pb-5">
    <button id="#winner" type="button">اختيار الرابح</button>
    <?php foreach ($user as $user_id) : ?>
<div class="container px-5 text-center">
  <div class="row gx-5">
    <div class="col">
     <div class="p-3"><?php echo htmlspecialchars($user_id['email'])  ?></div>
    </div>
    <div class="col">
      <div class="p-3"><?php echo htmlspecialchars($user_id['firstnm']) .' '.htmlspecialchars($user_id['lastnm'])  ?></div>
    </div>
  </div>
</div>
        <?php endforeach; ?>
</div>
       

<?php include_once './parts/footer.php'; ?>
        
