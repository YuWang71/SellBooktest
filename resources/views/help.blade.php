@extends('layouts.app')


@section('content')
<h1>About Us</h1>

<div class="row">
  <div class="col-lg-4">
    <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
    <h2>YiweiYao</h2>
    <p>自我吹嘘</p>
  <!--  <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>-->
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
    <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
    <h2>Yaner</h2>
    <p>自我吹嘘</p>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
    <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
    <h2>wo</h2>
    <p>多捞啊</p>
  </div><!-- /.col-lg-4 -->
</div><!-- /.row -->

<!--1. 产品自我介绍， 一定要细致  -->
<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading">What is UMBuys? </br>Who are we?</h2>
    <p class="lead">UMBuys is a website which found by 3 Computer Science students. It is a non-profit origanization, aim to provide a platform to trade or exchange used-book to save money.</p>
  </div>
  <div class="col-md-5">
    <img class="featurette-image img-fluid mx-auto" data-src="holder.js/300x300/auto" alt="Logo放上去">
  </div>
</div>

<!--使用说明 -->
<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7 order-md-2">
    <h2 class="featurette-heading">How to use it? <span class="text-muted">It is very convenience.</span></h2>
    <p class="lead">Sign up account, then post your book/find the target book, bargain, deal! </p>
  </div>
  <div class="col-md-5 order-md-1">
    <img class="featurette-image img-fluid mx-auto" data-src="holder.js/300*300/auto" alt="这个我没想好放什么">
  </div>
</div>

<footer class="container">
  <p class="float-right"><a href="#">Back to top</a></p>
  <p>&copy; UMBuys origanization &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
</footer>
</main>


</div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
  <script src="../../assets/js/vendor/popper.min.js"></script>
  <script src="../../dist/js/bootstrap.min.js"></script>
  <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
  <script src="../../assets/js/vendor/holder.min.js"></script>

@endsection
