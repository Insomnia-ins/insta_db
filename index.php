<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php
    $connect = mysqli_connect("127.0.0.1","root","","insta");
  	$text_query = "SELECT * FROM posts";
 	$con = mysqli_query($connect, $text_query);
?>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="icon" type="text/css" href="1213.png">
	<style type="text/css">
.forma{

	display: none;
	opacity: 0;
	transition: 1s;
}
.formaa{

	display: none;
	opacity: 0;
	transition: 1s;
}
.imgg{
	transition: 2s;
	opacity: 1;
}
.imgg:hover{

	opacity: 0.7;
	background-image: url(3.jpg);
}
	</style>
  </head>
  <body>

	<div class="p-3 border-bottom sticky-top bg-white"> <!--шапка-->
		<div class="col-8 mx-auto">
			<div class="row">
				<div class="col-4">
					<div class="row">
						<div class="col-1 px-0">
							<img src="logo.png" class="w-100">
						</div>
						<div class="col-1 px-0 text-center">
							<img src="line.png" class="w-50">
						</div>
						<div class="col-4 px-0">
							<img src="logo2.png" class="w-100">
						</div>
					</div>
				</div>
				<div class="col-4">
					<input type="" name="" placeholder="поиск" class="border rounded text-center px-3 ml-5 border-secondary">
				</div>
				<div class="col-4">
					<div class="row">
						<div class="col-6"></div>
						<div class="col-2 px-0 pl-2 mt-3">
							<img src="1.png" class="w-50">
						</div>
						<div class="col-2 px-0 pl-2 mt-3">
							<div class="dropdown">
							  <a class="" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    <img src="2.png" class="w-50">
							  </a>
							</div>
						</div>
						<div class="col-2 px-0 pl-2">
							<img src="1212.jpg" class="w-100">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="col-6 mx-auto" > <!--ГЛАВНЫЙ БЛОК-->
		<div class="row"> 
			<!--ЛЕВЫЙ БЛОК. ДИВ ДЛЯ ПОСТОВ-->
			<div class="col-8 px-0 my-2"> 
							
				<!--САМ ПОСТ-->
				<div class="mt-5 border rounded"> 
				  
					<?php 
	 		
	 				for($i=0;$i<$con->num_rows;$i++){
	 				$result = $con->fetch_assoc(); 

	 			?>  
					<div class="col-12 px-0">
						<div class="row">
							<div class="col-1 text-right pb-4 pt-2 px-0 ml-4">
								<img src="1212.jpg" class="w-100 " >
							</div>
							<div class="col-10 pb-4 pt-3 text-left ">
								<?php					
				echo "<form  action='close.php' method='GET' >

          							
         				
          				
                <button type='submit' class='btn btn-outline-light' value='".$result["id"]."' name='id'   style=' background-image: url(c.png); background-size: 100% 100%; height: 30px; width: 30px; margin-left: 97%;'></button>	


       			</form>	";

       			
			?>
							</div>													
						</div>
					</div>
					<div  class="col-12 mx-auto imgg updd" style="height: 400px; <?php echo "background-image: url(".$result["img"].")"?>; background-size: 100% 100%"> <!--картинка поста-->
					</div>
					<div class="col-12 py-2">  <!--текстовые элементы поста-->
						<div >
							<?php
								echo "<p class='' style='font-weight:bold' >".$result["name"]."</p>";
							?>
						</div>
						<div class="upd">
							<?php
								echo "<p class='' >".$result["title"]."</p>";
							?>
						</div>
						<div>
							<p>5 недель назад</p>
						</div>
						<div>

						

						
						<form  action='update2.php' method='GET' class="forma" name="foo" >

          							
         				<div class="form-group">
            				<label for="exampleInputEmail1" required="required">Описание</label>
            				<input  style="width: 70%; height: 8%" type="op" name="tit" class="form-control" placeholder="Напишите описание " style="height: 70px;" <?php echo "value='".$result["title"]."'"?>>
          				</div>

          				
          				<input type="hidden" name="id" <?php echo "value='".$result["id"]."'"?>>
          				<button type="submit" class="btn btn-outline-dark mt-3">Изменить</button>
              	
       					</form>


       					
       <form action='update.php' method='GET' class="formaa">
       	<div class="form-group mt-3">

           	<label class="mr-2" >Загрузить картинку</label>
            
            <input type="file" name="img" class="img" <?php echo "value='".$result["img"]."'"?>>
            
            <input type="hidden" name="id" <?php echo "value='".$result["id"]."'"?>> 
            


            <button type="submit" class="btn btn-outline-dark mt-3">Изменить</button>
           

            				
          </form>   				
        
       </div> 
       					

						
						</div>						
					</div>
					<?php } ?>
				</div>
				<!-- ПОСТ ЗАКРЫЛСЯ-->

			
			</div> 
			<!--ДИВ ДЛЯ ПОСТОВ закрылся-->


			<div class="col-4 mt-5">  <!--ПРАВЫЙ БЛОК. ПОДПИСКИ И ТД-->
				<div class="my-2 border rounded px-3 py-2">
					<div class="col-12">
						<div class="row">
							<div class="col-3 px-0">
								<img src="1212.jpg" class="w-100 ">
							</div>
							<div class="col-9">
								<h6 class="mb-0">Inso_mnia_</h6>
								<p class="text-secondary mb-0">Nikita</p>
							</div>
						</div>
					</div>
				</div>
				<div class="mt-2 border my-2 rounded  px-3 py-2">
					<div class="col-12">
						<div class="row">
							<div class="col-4 text-left px-0 pb-3 pt-1">Истории</div>
							<div class="col-8 text-left pb-3 pt-1">Смотреть все</div>
						</div>
						<div class="row">
							<div class="col-3 px-1">
								<img src="JF.png" class="w-100 rounded-circle">
							</div>
							<div class="col-9 py-2" >
								<p>jimmyfallon</p>
							</div>
						</div>
						<div class="row mt-2">
							<div class=" col-3 px-1">
								<img src="pew.png" class="w-100 rounded-circle">
							</div>
							<div class="col-9 py-2" >
								<p>PewDiePie</p>
							</div>
						</div>
						<div class="row mt-2">
							<div class=" col-3 px-1">
								<img src="kodz.png" class="w-100 rounded-circle">
							</div>
							<div class="col-9 py-2" >
								<p>Hideo Kojima</p>
							</div>
						</div>						
					</div>
				</div>
				<div class="my-2 border rounded px-3 py-2">  <!--ПРАВЫЙ БЛОК. РЕКОМЕНДАЦИИ-->
					<div class="col-12">
						<div class="row">
							<div class="col-8 text-left px-0 pb-3 pt-1">Рекомендации для вас</div>
							<div class="col-4 text-left pb-3 pt-1">Все</div>
						</div>
						<div class="row">
							<div class="col-3 px-2">
								<img src="mbn.png" class="rounded-circle w-100">
							</div>
							<div class="col-9 ">
								<p class="mb-0">mbn360</p>
								<a href="" class="mb-0">Подписаться</a>
							</div>
						</div>
						<div class="row mt-2">
							<div class="col-3  px-2" >
								<img src="9gag.png" class="rounded-circle w-100">
							</div>
							<div class="col-9 ">
								<p class="mb-0">9gag</p>
								<a href="" class="mb-0">Подписаться</a>
							</div>
						</div>
						<div class="row mt-2">
							<div class="col-3  px-2" >
								<img src="groot.png" class="rounded-circle w-100">
							</div>
							<div class="col-9 " >
								<p class="mb-0">groot</p>
								<a href="" class="mb-0">Подписаться</a>
							</div>
						</div>
					</div>

				</div>
				<div class="  mx-auto col-12" style="height: 60px; margin-top: 5%">
			<a href="admin.php"><button type="button" class="btn btn-outline-dark mt-3 col-12" style="height: 70%; ">Добавить пост</button></a>
		</div>	
			</div>

		</div>

	</div>

	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <script type="text/javascript">
    	
    	let upd = document.querySelectorAll(".upd");
    	let forma = document.querySelectorAll(".forma");
    	let updd = document.querySelectorAll(".updd");
    	let formaa = document.querySelectorAll(".formaa");
    	let img2 = document.querySelectorAll(".img2");
    	let img = document.querySelectorAll(".img");
    	let y = 1;
    	let x = 1;

    	
 		

    	for (let i = 0; i < 3 ; i++) {
    		
    	
    	let op = function(){

    		forma[i].style.opacity = "1";
    		y = 2;
    	}
    	let op2 = function(){

    		forma[i].style.display = "block";
    	}
    	let op21 = function(){

    		forma[i].style.opacity = "0";
    	}
    	let op22 = function(){

    		forma[i].style.display = "none";
    		y = 1;
    	}

    	upd[i].onclick = function(){

    		if (y == 1){
    		setTimeout(op,200);
    		setTimeout(op2,10);
    		
    		}

    		if (y == 2){

    			setTimeout(op21,10);
    			setTimeout(op22,1100);
    			
    		}

    	}

    	}

    	for (let i = 0; i < 3 ; i++) {
    		
    	
    	let op112 = function(){

    		formaa[i].style.opacity = "1";
    		x = 2;
    	}
    	let op2112 = function(){

    		formaa[i].style.display = "block";
    	}
    	let op211 = function(){

    		formaa[i].style.opacity = "0";
    	}
    	let op221 = function(){

    		formaa[i].style.display = "none";
    		x = 1;
    	}

    	updd[i].onclick = function(){

    		if (x == 1){
    		setTimeout(op112,200);
    		setTimeout(op2112,10);
    		
    		}

    		if (x == 2){

    			setTimeout(op211,10);
    			setTimeout(op221,1100);
    			
    		}

    	}
    	}

    </script>
  </body>
</html>