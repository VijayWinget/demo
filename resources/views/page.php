
<h1>Page Routing</h1>

<!--
<a  href="<?=url('page/1/page')?>" >First Page</a>
<br>
<a  href="<?=url('page/1/number')?>" >First Number</a>
<br>
<a  href="<?=url('page/1')?>" >First null</a>
<br> -->
<a  href="<?=route('page',['id'=>1,'type'=>'page'])?>" >First Page</a>
<br>
<a  href="<?=route('page',['id'=>1,'type'=>'number'])?>" >First Number</a>
<br>
<a  href="<?=route('page',['id'=>1])?>" >First null</a>
<br>

