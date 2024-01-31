<?php include('frontend/layouts/general.php'); ?>
<?php include('backend/app/services.php'); ?>

<br>
<div class="newsletter container" dir="rtl">
    <h2>ابحث عن خدمة: </h2>
    <input class="input text-align-center" type="text" placeholder="جناح - غرفة">
    <input class="btn btn-main" type="button" value="بحث">
</div>

<?php foreach ($services as $index => $service) : ?>
    <?php if ($index % 2 == 0) : ?>
    <div class="reservation container">
        <div class="box">
            <h3><?= $service->name ?></h3>
            <p><?= $service->description ?></p>
            <input class="btn btn-second" type="button" value="اعرف المزيد">
            <?php if(!checkIfServiceBooked($service->id)) : ?>
            <form method="post" action="" style="display: flex; flex-direction: column;">
                <input type="hidden" name="service_id" value="<?= $service->id?>">
                <input class="btn btn-second" type="submit" value="احجز الآن">
            </form>
            <?php else : ?>
                <input class="btn btn-second" type="button" value="محجوز">
            <?php endif; ?>
        </div>
        <div class="image" style="background-image: url('public/<?= $service->image ?>');"></div>
    </div>
    <?php else: ?>
    <div class="reservation container">
        <div class="image" style="background-image: url('public/<?= $service->image ?>');"></div>
        <div class="box">
            <h3><?= $service->name ?></h3>
            <p><?= $service->description ?></p>
            <input class="btn btn-second" type="button" value="اعرف المزيد">
            <?php if(!checkIfServiceBooked($service->id)) : ?>
            <form method="post" action="" style="display: flex; flex-direction: column;">
                <input type="hidden" name="service_id" value="<?= $service->id?>">
                <input class="btn btn-second" type="submit" value="احجز الآن">
            </form>
            <?php else : ?>
                <input class="btn btn-second" type="button" value="محجوز">
            <?php endif; ?>
        </div>
    </div>
    <?php endif; ?>
<?php endforeach; ?>

<div class="container text-align-center">
    <a href="services.html" class="btn btn-main" type="button">تعرف على المزيد</a>
</div>
<?php require_once('frontend/parts/footer.php'); ?>