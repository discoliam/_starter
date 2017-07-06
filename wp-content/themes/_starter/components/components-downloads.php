<?php 
  // @package _starter
?>

<div class="component component--downloads">

  <?php if( have_rows('downloads') ):
    while( have_rows('downloads') ): the_row(); 
        
      $title = get_sub_field("title");
      $desc = get_sub_field("description");
      $file = get_sub_field("file");
      $filesize = filesize( get_attached_file( $file['ID'] ) );
      $filesizeFormat = size_format($filesize, 2);
      $ext = pathinfo($file['url'], PATHINFO_EXTENSION);

      if ($ext == "pdf"){
        $icon = "fa-file-pdf-o";
      } elseif ($ext = "jpg" || $ext = "gif" || $ext = "png" || $ext = "svg"){
        $icon = "fa-file-image-o";
      } elseif ($ext = "mp4" || $ext = "mov" || $ext = "webm" || $ext = "svg"){
        $icon = "fa-file-video-o";
      } elseif ($ext = "mp3" || $ext = "ogg" || $ext = "wav" || $ext = "flac"){
        $icon = "fa-file-audio-o";
      } elseif ($ext = "zip" || $ext = "gzip"){
        $icon = "fa-file-archive-o";
      } else {
        $icon = "fa-file";
      }

      ?>
      
      <div class="download-item">
        <?php if($title){echo "<h3>" . $title . " <span class='size'>" . $filesize . "&nbsp;" . $ext . "</span>" . "</h3>";} ?>
        <?php if($file) {
          echo "<a href='" . $file['url'] . "' class='btn'>Download</a>";
        } ?>
      </div>

    <?php endwhile; ?>
  <?php endif; ?>
</div>