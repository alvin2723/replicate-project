<footer class="footer-section">


    {{-- CopyRight --}}
    <div class="footer-legal">
        
        <ul class="footer-menu">
            <li class="footer-link"><a href="https://www.youtube.com/channel/UCi2WG2vnvehuplyf6R5T2Ew"><i class="fab fa-youtube footer-icon"></i></a></li>
            <li class="footer-link"><a href="https://www.instagram.com/latihidofficial/"><i class="fab fa-instagram footer-icon"></i></a></li>
            <li class="footer-link"><a href="https://www.facebook.com/latihidofficial/"><i class="fab fa-facebook-square footer-icon"></i></a></li>
        </ul>
        <h4 class="copyright">
            © 2021 Copyright
        </h4>
       
    </div>
</footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="{{asset('js/slider/slick.conf.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $(document).on('click', '#detail-product',function(){
                var name = $(this).data('name');
                var detail = $(this).data('detail');
                var price = $(this).data('price');
                $('#name').text(name);
                $('#detail').text(detail);
                $('#price').text(price);
            })
        });
    </script>