<html>
    <head>
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    </head>
    <body>
        <input type="text" name="number" id="number" />
        <button onclick="getContent()">Submit</button>
        <div class="content"></div>
        <script type="text/javascript">
            function getContent() {
                var number = $('#number').val();
                $.post(
                    'algorithm.php',
                    {number: number},
                    function(data, status){
                        if (status == 'success') {
                            $('.content').html(data);
                        } else {
                            alert('error!!!');
                        }
                });
            }
        </script>

    </body>
</html>
