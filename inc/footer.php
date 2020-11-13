</div>
<footer class="py-4" style="background:black;">
<div class="col-12 text-center copyright">
    <p class="mb-0 mt-1 text-white" style="font-size: 16px;">
        &copy; <?php echo date("Y");?> <span class="read-more">Workshop</span> - All Rights Reserved	
    </p>
</div>
<form class="newsletter my-3" method="post" id="contact_modal_form" onsubmit="return false;">
          <input type="email" name="news_email" id="news_email"  class="form-control" placeholder="Your Email Address" value="">
          <button class="my-3" id="element">
			  Subscribe
          </button>
	</form>
</footer>
<script>
    $("#contact_modal_form").submit(function(){
        var news_email = $.trim($("#news_email").val());
        if(news_email == ""){
            alert("empty");
        } else {
        var form = $(this);
        $.ajax({
            type: form.attr('method'),
            url: 'https://localhost/workshop/inc/ajax/form.php',
            data: form.serialize(),
            dataType: 'script'
        });
    }
});
</script>
</body>
</html>