<button class="btn btn-light" onclick="topFunction()" id="myBtn" title="Go to top">Back to top</button>

<script>
    //Get the button
    var mybutton = document.getElementById("myBtn");

    var tid = setInterval( function () {
        if ( document.readyState !== 'complete' ) return;
        clearInterval( tid );
        mybutton.style.display = "none";
    }, 100 );

    // When the user scrolls down 200px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
            mybutton.style.display = "block";
        }
        else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>

