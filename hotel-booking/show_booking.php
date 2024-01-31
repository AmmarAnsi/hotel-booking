<?php include('frontend/layouts/general.php'); ?>
<?php include('backend/app/show_booking.php'); ?>

<table>
  <tr>
    <th>اسم المستخدم</th>
    <th>اسم الخدمة</th>
    <th>حالة الحجز</th>
  </tr>
  <?php foreach ($bookings as $index => $booking) : ?>
  <tr>
    <td><?= getUserName($booking->user_id) ?></td>
    <td><?= getServiceName($booking->service_id) ?></td>
    <td><?= $booking->is_active ? 'فعال' : 'غير فعال' ?></td>
  </tr>
  <?php endforeach; ?>
</table> <br><br> 
<?php require_once('frontend/parts/footer-auth.php'); ?>