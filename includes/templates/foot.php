
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.0/FileSaver.min.js" integrity="sha512-csNcFYJniKjJxRWRV1R7fvnXrycHP6qDR21mgz1ZP55xY5d+aHLfo9/FcGDQLfn2IfngbAHd8LdfsagcCqgTcQ==" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type='text/javascript' defer>
  function screenshot() {

    var node = document.getElementById('body');
    var html = node.innerHTML;

    console.log(document.getElementsByClassName("remove"));
    var removes = document.getElementsByClassName("remove");

    while (removes.length > 0) {
      removes[0].remove();
    }

    console.log(document.getElementsByClassName("remove"));

    var scale = 2;

    domtoimage.toPng(node, {
        quality: 500,
        height: node.offsetHeight * scale,
        width: node.offsetWidth * scale,
        style: {
          transform: "scale(" + scale + ")",
          transformOrigin: "top left",
          width: node.offsetWidth + "px",
          height: node.offsetHeight + "px"
        }
      })
      .then(function(dataUrl) {
        var link = document.createElement('a');
        link.download = 'onehadith_<?php
        echo $hadith->collection;
        echo "_";
        echo $hadith->hadith_no;
        ?>.png';
        link.href = dataUrl;
        link.click();
        node.innerHTML = html;
      });
  }
</script>

<div class="message" onclick="message(this)" style="display: <?php echo $msg ==
''
    ? 'none'
    : 'block'; ?>;">
    <div class="message-text text-center text-<?php echo $msg_type; ?>">
        <p><?php echo $msg; ?></p>
        <button class="btn" style="font-size: 1rem; color:white; opacity:0.7" href=".">Click here to remove the message!</button>
    </div>
</div>

<script>
    function message(object) {
        object.classList.add("message-fade-out")
    }
</script>

<script>
    feather.replace()
</script>

<script src="assets/js/jquery-3.4.1.min.js" crossorigin="anonymous"></script>

<script>

function capFL(string) {
  while(string.charAt(0) == " ")
  {
    string = string.slice(1);
  }
  return string.charAt(0).toUpperCase() + string.slice(1);
}


  function copy() {
    var $temp = $("<textarea>");
    $("body").append($temp);

    // var narrator = document.getElementById('narrator').textContent;
    var hadith = document.getElementById('hadith').textContent;
    // hadith_only = hadith_only.replace(narrator,"");
    // var hadith = narrator + "\r\n" + capFL(hadith_only);
    hadith += "\r\n" + document.getElementById('grade').textContent ;
    

    $temp.val(hadith).select();
    document.execCommand("copy");
    $temp.remove();
    alert("Hadith copied to clipboard!")
  }

  function copy_link(folder) {
    var $temp = $("<textarea>");
    $("body").append($temp);    

    $temp.val("https://onehadith.org/" + folder + "?hadith=<?php echo $hadith->collection; echo "_"; echo $hadith->hadith_no; ?>").select();
    document.execCommand("copy");
    $temp.remove();
    alert("Link copied to clipboard!")
  }
</script>

<script src="assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</body>

</html>