</div></div>

<? if (isset($_GET['cardid'])) { ?>

<div class="footer">
  <div class="container-fluid btn-group">
    <a href="/kiosk/" class="btn btn-warning">Log Out</a>
    <a href="/kiosk/card.php?cardid=<?=$_GET['cardid']?>" class="btn btn-default">Back</a>
  </div>
</div>

<? } ?>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/javascript/jquery.idle.min.js"></script>
<script type="text/javascript" src="/javascript/kiosk.js"></script>

<? if (isset($_GET['cardid'])) { ?>
<script type="text/javascript">
    $(document).idle({
        onIdle: function() {
            console.log("Idle");
            window.location = "/kiosk";
        },
        timeout: 60000
    });
</script>
<? } ?>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-7698227-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
