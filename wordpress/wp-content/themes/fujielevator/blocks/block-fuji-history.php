<?php
/**
 * Created by PhpStorm.
 * User: mantran
 * Date: 8/15/19
 * Time: 10:35 AM
 */
$rowSpan = 0;
for ($i = 1; $i <= 10; $i++) {
    if (block_field( 'month-' . $i, false )) {
        $rowSpan++;
    }
}
?>
<table class="block-history">
    <tbody>
    <?php
     for ($i = 1; $i <= 10; $i++) {
         if (block_field( 'month-' . $i, false )) {
     ?>
             <tr>
                 <?php if ($i === 1) {
                 ?>
                     <td class="year" rowspan="<?= $rowSpan ?>"><strong><?php block_field( 'year' ) ?></strong></td>
                 <?php
                 } ?>

                 <td class="month"><strong><?php block_field( 'month-'.$i ) ?></strong></td>
                 <td class="content">
                     <?php block_field( 'event-'.$i ) ?>
                     <?php if (block_field( 'image-'.$i, false )) { ?>
                         <img src="<?php block_field('image-'.$i) ?>" alt="" />
                     <?php } ?>
                 </td>
             </tr>
    <?php
         }
     }
    ?>
    </tbody>
</table>
