<div class="message" onclick="message(this)" style="display: <?php echo $msg == "" ? "none" : "block" ?>;">
        <div class="message-text text-center text-<?php echo $msg_type; ?>">
        <p><?php echo $msg; ?></p>
        <button class="btn" style="font-size: 1rem; color:white; opacity:0.7" href=".">Click here to remove the message!</button>
    </div>
    </div>

    <script>
        function message(object)
        {
            object.classList.add("message-fade-out")
        }
    </script>

<script src="assets/js/jquery-3.4.1.min.js" crossorigin="anonymous"></script>


<script src="assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</body></html>