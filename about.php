<?php
    include('header.php');
?>
<style>
    .hover img{
        border-radius: 20px;
        box-shadow: 2px 3px 15px;
    }
    .hover .about-hover{
        background-color: aqua;
        border-radius: 20px;
        height: 371.59px;
        opacity: .5;
        position: absolute;
        top: 0px;
        width: 548.60px;
        display: none;
        z-index: 1;
        text-align: center;
        font-size: 40px;
        font-family: cursive;
        color: red;
    }
    .hover:hover .about-hover{
        display: block;
        height: 371.59px;
        width: 548.60px;
        z-index: 2;
    }
    @media screen and (max-width: 720px){
        .hover .about-hover{
            display: none;
        }
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-6">
        <h1 style="text-shadow: 2px 3px 30px;">
            About us
        </h1>
        <p style="background-color: white; padding: 20px; font-size: 20px; text-align: justify; font-family: 'Century Gothic'; border-radius: 15px; box-shadow: 2px 3px 20px rgba(0, 0, 0, 0.5);">
                        
Its common to hear about the wild hotel costs in DC during Presidential Inaugurations, but don’t be deterred. The best advice is to find a hotel outside of downtown and commute into the city via Metro. There are over 100 hotels near DC Metro stations, and plenty of affordable options for hotels within walking distance to the Metro. Find the best hotels outside DC in India.
        </p>
        </div>
        <div class="col-md-6"> <div class="hover"><img src="Images/Clarks.jpg" alt="" class="img-responsive">
            <div class="about-hover">
           <span style="position: relative; top: 150px; letter-spacing: 15px;">     Swimming Pool</span>
            </div></div></div>
    </div>
</div>

<br>

<?php
    include('footer.php');
?>                                                                        