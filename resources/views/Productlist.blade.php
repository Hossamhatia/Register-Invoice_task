<!DOCTYPE html>
<html>
<head>
    <title></title>


    <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
</head>
<body>
<center>
    <h1>Ratio Task</h1>
</center>
<div style="width:45%;float: left;height: 500px;border: 1px solid red">
    <table border="1px solid green">

        <th>
            Product-Name-Arabic
        </th>
        <th>Product_Name-English</th>
        <th>
            Product-Price
        </th>
        @foreach($prr as $pr)
            <tr>

                <td>
                    {{$pr->NameInArabic}}
                </td>
                <td>
                    {{$pr->NameInEnglish}}
                </td>
                 <td>
                    {{$pr->Price}}
                </td>

            </tr>
        @endforeach


    </table>
</div>

<div style="width:50%;float: right;height: 500px;border: 1px solid red">

    <form action="/register/create" method="post">
        @csrf
    <label>Please enter Customer name:</label>
        <input type="text" name="cstname" class="cstname"><br>
    <label for="prod_cat_id">Product Category: </label>
    <select style="width: 200px" class="productcategory" id="prod_cat_id">

        <option value="0" disabled="true" selected="true">-Select-</option>
        @foreach($prod as $cat)
            <option value="{{$cat->id}}">{{$cat->product_cat_name}}</option>
        @endforeach

    </select><br>

    <label for="prod_name">Product Name: </label>
    <select style="width: 200px" class="productname" id="prod_name" name="prod_name">

        <option value="0" disabled="true" selected="true">Product Name</option>


    </select><br>

    <label for="pro_price">Product Price: </label>
    <input type="text" class="prod_price" id="pro_price" name="pr_price"><br>
        <label>please enter quantity</label>
        <input type="text"  id="Qty" class="Qty" name="Qty"><br>

<input type="button" onclick="calc_total()" value="Calculate">

    <script>



        function calc_total()
        {
             filed1 = document.getElementById("Qty").value;
             result= document.getElementById("pro_price").value;
            $("#total").val(filed1 * result);

        }
    </script>




        <!--<label class="total" id="total"name="total"></label>L.E<br>-->
        <input type="text" name="total" id="total" readonly="readonly">L.E<br>


        <input type="submit" name="submit">

    </form>

</div>



<script type="text/javascript">
    $(document).ready(function(){

        $(document).on('change','.productcategory',function(){
            //console.log(" its change");

            var cat_id=$(this).val();
            // console.log(cat_id);
            var div=$(this).parent();

            var op=" ";

            $.ajax({
                type:'get',
                url:'{!!URL::to('findProductName')!!}',
                data:{'id':cat_id},

                success:function(data){
                    //console.log('success');

                    console.log(data);

                    //console.log(data.length);
                    op+='<option value="0" selected disabled>chose product</option>';
                    for(var i=0;i<data.length;i++){
                        op+='<option value="'+data[i].id+'">'+data[i].NameInEnglish+'</option>';
                    }

                    div.find('.productname').html(" ");
                    div.find('.productname').append(op);
                },
                error:function(){

                }
            });
        });

        $(document).on('change','.productname',function () {
            var prod_id=$(this).val();

            var a=$(this).parent();
            console.log(prod_id);
            var op="";
            $.ajax({
                type:'get',
                url:'{!!URL::to('findPrice')!!}',
                data:{'id':prod_id},
              // dataType:'object',
                success:function(data){
                    console.log("price");
                    console.log(data);



                  a.find('.prod_price').val(data.price);


                },
                error:function(){

                }
            });


        });

    });
</script>

</body>
</html>
