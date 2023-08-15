<?php function myCustomCommentsList($comment, $args, $depth){ ?>
 
 <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">

       <span class="avatar">
           <?php
           $default_avt = '';
           echo get_avatar($comment,$size='60',$default= $default_avt );
           ?>
       </span>

       <div class="d-inline-block pr-3 w-100">
           <strong><?php echo get_comment_author(); ?></strong>
           <span class="pr-3 time-comment">
             <?php printf(esc_html__('%1$s at %2$s' , 'original-key'), get_comment_date(),  get_comment_time()) ?>
           </span>
           <span class="float-left reply">
               <span class="text-muted"> <a href="#"><i class="fas fa-reply text-muted"></i> <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></a>
               </span>
           </span>
           <p class="paragragh-comment pt-3"><?php comment_text() ?></p>
       </div>

   </li>
<?php

}

$commenter  = wp_get_current_commenter();
 
$fields =  array(
  'author' =>
  '<div class="col-md-4 pt-4 submit-btn">
    <span class="icon-commentbtn1">
         <input type="text" placeholder="نام ونام خانوادگی" class="form-control mb-3 d-inline-block" value="'. esc_attr( $commenter['comment_author'] ) .'" >
    </span>',
 
  'email' =>
  '<span class="icon-commentbtn2">
       <input type="email" placeholder="ایمیل" class="form-control w-50 mb-3 mr-1 float-left" value="' . esc_attr(  $commenter['comment_author_email'] ) .'">
   </span></div>',
);
 
$comment_form = array(
  'title_reply'         => 'پاسخ دهید',
  'title_reply_to'      => esc_html__( 'Leave a Reply to %s :', 'woocommerce' ),
  'cancel_reply_link' => '<span class="btn btn-outline-light btn-sm text-primary">(لغو پاسخ)</span>',
  'label_submit'      => 'ارسال دیدگاه',
  'class_form'      => 'comment-form row px-5',
  'comment_notes_before' => ' <div class="card m-3 p-sm-4">',
  'submit_button'=> '<button class="btn btn-lightorng d-flex align-items-center"><svg class="ml-2" width="25" height="25" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M23.8268 29.16C23.4134 29.16 23.0001 29.0534 22.6268 28.8267L17.2801 25.6534C16.7201 25.64 16.1601 25.6001 15.6268 25.5201C15.2668 25.4667 14.9601 25.2267 14.8268 24.88C14.6934 24.5333 14.7601 24.16 15.0001 23.88C15.8801 22.8533 16.3334 21.6267 16.3334 20.32C16.3334 17.0934 13.4934 14.4667 10.0001 14.4667C8.69343 14.4667 7.44009 14.8267 6.38676 15.5201C6.09343 15.7067 5.73343 15.7334 5.41343 15.5867C5.10677 15.44 4.88011 15.1467 4.84011 14.8C4.80011 14.4267 4.77344 14.0534 4.77344 13.6667C4.77344 7.05337 10.5068 1.68005 17.5468 1.68005C24.5868 1.68005 30.3201 7.05337 30.3201 13.6667C30.3201 17.2934 28.6401 20.6267 25.6801 22.9067L26.1334 26.5334C26.2401 27.4401 25.8401 28.2934 25.0801 28.7867C24.7068 29.0267 24.2668 29.16 23.8268 29.16ZM17.5334 23.64C17.7201 23.6267 17.9068 23.6801 18.0668 23.7867L23.6534 27.1067C23.8001 27.2001 23.9201 27.1601 24.0001 27.1067C24.0668 27.0667 24.1734 26.9601 24.1468 26.7734L23.6268 22.56C23.5868 22.1867 23.7468 21.8267 24.0401 21.6134C26.7601 19.7067 28.3201 16.8 28.3201 13.64C28.3201 8.13335 23.4934 3.65336 17.5468 3.65336C11.8268 3.65336 7.13343 7.81341 6.78676 13.0401C7.78676 12.6534 8.86678 12.4401 9.98678 12.4401C14.5868 12.4401 18.3201 15.96 18.3201 20.2933C18.3334 21.4667 18.0534 22.6 17.5334 23.64Z" fill="white"/>
  <path d="M6.10636 30.3335C5.7597 30.3335 5.42636 30.2402 5.11969 30.0402C4.51969 29.6535 4.1997 28.9868 4.2797 28.2802L4.54637 26.2268C2.74637 24.7601 1.67969 22.5868 1.67969 20.3068C1.67969 17.7068 3.0397 15.2801 5.3197 13.8268C6.69304 12.9334 8.31969 12.4535 10.013 12.4535C14.613 12.4535 18.3464 15.9734 18.3464 20.3068C18.3464 22.0668 17.7064 23.8001 16.533 25.1735C15.0264 27.0001 12.773 28.0668 10.293 28.1468L7.03969 30.0801C6.74636 30.2535 6.42636 30.3335 6.10636 30.3335ZM9.99969 14.4535C8.69303 14.4535 7.43969 14.8135 6.38635 15.5068C4.67969 16.6001 3.66636 18.3868 3.66636 20.3068C3.66636 22.1601 4.57303 23.8535 6.17303 24.9468C6.4797 25.1602 6.63969 25.5201 6.59969 25.8934L6.30636 28.1735L9.49302 26.2802C9.65302 26.1868 9.82636 26.1334 9.99969 26.1334C11.9597 26.1334 13.813 25.2935 14.9864 23.8668C15.8664 22.8268 16.333 21.6001 16.333 20.2934C16.333 17.0801 13.493 14.4535 9.99969 14.4535Z" fill="white"/>
  </svg>ارسال دیدگاه</button></div>',
  'comment_field' =>'<div class="form-group comment-page-blog "><textarea id="comment" name="comment" aria-required="true" rows="4" placeholder="متن خود را تایپ نمایید..."
  class="form-control area mb-2"></textarea>',
  'fields' => $fields,
 
);
 
comment_form(  $comment_form  );