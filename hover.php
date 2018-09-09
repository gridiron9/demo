<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>

.row-height {
    height: 70px;
    text-align: center;
    padding-top: 10px;
      border-radius: 5%;
  padding-right: 2px;

}
.row-height h1{
  opacity: 0;
    text-align: center;
}
.row-height:hover h1{

  opacity: 1;
 }
 .row-height:hover {
  color: black;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
 }
 /*colors style="background-color: #e3e3e3;
 style="background-color: yellow;"
 style="background-color: red"
  style="background-color: blue;"
   style="background-color: #42f4cb;"
    style="background-color: #f441d3;"
    style="background-color: aliceblue; width: 350px; height: 150px "
    */
</style>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
       <div class="col-md-8 ">
          <div class="row">
             <div class="col-md-4 bg-success row-height" >
                <h1>4</h1>
             </div>
            <div class="col-md-4 bg-info row-height" >
                <h1>4</h1>
             </div>
              <div class="col-md-4 bg-warning row-height" >
                <h1>4</h1>
              </div>
          <div class="awagi">
              <div class="col-md-1 bg-danger row-height">
                <h1> 1 </h1>
              </div>
              <div class="col-md-10 bg-primary row-height ">
                <h1>10</h1>
              </div>
              <div class="col-md-1 bg-success row-height">
                <h1>1</h1>
              </div>
          </div>
        </div>
    </div>
    
    <div class="col-md-4 bg-info row-height" >
        <h1>4</h1>
    </div>
  </div>
</div>


</body>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>
