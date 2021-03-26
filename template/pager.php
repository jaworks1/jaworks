<nav class="pager">
    <?php if (paginate_links() ) : //ページが1ページ以上あれば以下を表示 ?>
      <!-- pagenation -->
       <ul class="pagenation">
      <?php
        echo
        paginate_links(
        array(
        'end_size' => 0,
        'mid_size' => 2,
        'prev_next' => false,
        )
        );
        ?>
    </ul><!-- /pagenation -->
  <?php endif; ?>
</nav>