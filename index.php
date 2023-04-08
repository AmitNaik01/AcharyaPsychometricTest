<?php include('./includes/header.php');  ?>

<div class="container-fluid bg-dark text-light py-3">
    <header class="text-center">
        <h1 class="display-6">Acharya Psychometric Test </h1>
    </header>
</div>
<section class="container my-2 bg-light w-100 text-dark p-2">
    <form class="row g-3 p-3" action="./includes/submit.php" method="post">
        <div class="col-md-8">
            <label for="validationDefault01" class="form-label">Student Name</label>
            <input type="text" class="form-control" id="validationDefault01" name="sname" required>
        </div>
        <div class="col-md-4">
            <label for="validationDefault02" class="form-label">Current Grade/Class</label>
            <input type="text" class="form-control" id="validationDefault02" name="grade" required>
        </div>
        <div class="col-md-4">
            <label for="validationDefaultUsername" class="form-label">Stream</label>
            <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" name="stream" required>
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email Address</label>
            <input type="email" class="form-control" name="email" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Country</label>
            <input type="text" class="form-control" id="inputPassword4" name="country">
        </div>
        <div class="col-6">
            <label for="inputAddress" class="form-label">Mobile Number</label>
            <input type="text" class="form-control" id="inputAddress" name="phno">
        </div>


        <div class="col-md-12 ">

            <!-- EXTROVERT or INROVERT -->
            <section>
                <div class="container mt-4">
                    <h2 class="text-center mt-4">EXTROVERT or INROVERT</h2>
                    <ul class="ml-4">
                        <li>
                            <h5 class="mt-4">BEHAVIOUR</h5>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd1" name="op1" value="1">
                            <label class="form-check-label" for="inlineRadio1">I am Outgoing</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd2" name="op1" value="2">
                            <label class="form-check-label" for="inlineRadio2">I am Reserved</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd3" name="op2" value="3">
                            <label class="form-check-label" for="inlineRadio1"> I am Relaxed </label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd4" name="op2" value="4">
                            <label class="form-check-label" for="inlineRadio2">I am Intense</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd5" name="op3" value="5">
                            <label class="form-check-label" for="inlineRadio1">I am Enthusiastic</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd6" name="op3" value="6">
                            <label class="form-check-label" for="inlineRadio2">I am Aloof</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd7" name="op4" value="7">
                            <label class="form-check-label" for="inlineRadio1">I Speak-out in groups</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd8" name="op4" value="8">
                            <label class="form-check-label" for="inlineRadio2">I Absorb information in groups</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd9" name="op5" value="9">
                            <label class="form-check-label" for="inlineRadio1">I Energy grows at parties</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd10" name="op5" value="10">
                            <label class="form-check-label" for="inlineRadio2">I Energy wanes at parties</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd11" name="op6" value="11">
                            <label class="form-check-label" for="inlineRadio1">I have a large group of friends</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd12" name="op6" value="12">
                            <label class="form-check-label" for="inlineRadio2">I have a select few friends</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd13" name="op7" value="13">
                            <label class="form-check-label" for="inlineRadio1">I think out loud</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd14" name="op7" value="14">
                            <label class="form-check-label" for="inlineRadio2">I think within</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd15" name="op8" value="15">
                            <label class="form-check-label" for="inlineRadio1">I look for activity</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd16" name="op8" value="16">
                            <label class="form-check-label" for="inlineRadio2">I seek for quiet time</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd17" name="op9" value="17">
                            <label class="form-check-label" for="inlineRadio1">I like to talk </label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd18" name="op9" value="18">
                            <label class="form-check-label" for="inlineRadio2">I like to listen</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd19" name="op10" value="19">
                            <label class="form-check-label" for="inlineRadio1">I share my personal experiences</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd20" name="op10" value="20">
                            <label class="form-check-label" for="inlineRadio2">I am unapproachable</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd21" name="op11" value="21">
                            <label class="form-check-label" for="inlineRadio1">I like new experiences</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd22" name="op11" value="22">
                            <label class="form-check-label" for="inlineRadio2">I like stability in my inner life</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd23" name="op12" value="23">
                            <label class="form-check-label" for="inlineRadio1">I want to be with people</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd24" name="op12" value="24">
                            <label class="form-check-label" for="inlineRadio2">I take a detached approach</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd25" name="op13" value="25">
                            <label class="form-check-label" for="inlineRadio1">I am influenced by external opinions</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd26" name="op13" value="26">
                            <label class="form-check-label" for="inlineRadio2">I am inner directed</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd27" name="op14" value="27">
                            <label class="form-check-label" for="inlineRadio1">I show emotions</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd28" name="op14" value="28">
                            <label class="form-check-label" for="inlineRadio2">I exercise restraint</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd29" name="op15" value="29">
                            <label class="form-check-label" for="inlineRadio1">I respond quickly</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd30" name="op15" value="30">
                            <label class="form-check-label" for="inlineRadio2">I resond carefully</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>
                </div>
            </section>
            
            <!-- SENSING or INTUTION  -->
            <section>
                <div class="container mt-4">
                    <h2 class="text-center mt-4">SENSING or INTUTION</h2>
                    <ul class="ml-4">
                        <li>
                            <h5 class="mt-4">BEHAVIOUR</h5>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd1" name="op1" value="1">
                            <label class="form-check-label" for="inlineRadio1">I am Outgoing</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd2" name="op1" value="2">
                            <label class="form-check-label" for="inlineRadio2">I am Reserved</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd3" name="op2" value="3">
                            <label class="form-check-label" for="inlineRadio1"> I am Relaxed </label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd4" name="op2" value="4">
                            <label class="form-check-label" for="inlineRadio2">I am Intense</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd5" name="op3" value="5">
                            <label class="form-check-label" for="inlineRadio1">I am Enthusiastic</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd6" name="op3" value="6">
                            <label class="form-check-label" for="inlineRadio2">I am Aloof</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd7" name="op4" value="7">
                            <label class="form-check-label" for="inlineRadio1">I Speak-out in groups</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd8" name="op4" value="8">
                            <label class="form-check-label" for="inlineRadio2">I Absorb information in groups</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd9" name="op5" value="9">
                            <label class="form-check-label" for="inlineRadio1">I Energy grows at parties</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd10" name="op5" value="10">
                            <label class="form-check-label" for="inlineRadio2">I Energy wanes at parties</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd11" name="op6" value="11">
                            <label class="form-check-label" for="inlineRadio1">I have a large group of friends</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd12" name="op6" value="12">
                            <label class="form-check-label" for="inlineRadio2">I have a select few friends</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd13" name="op7" value="13">
                            <label class="form-check-label" for="inlineRadio1">I think out loud</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd14" name="op7" value="14">
                            <label class="form-check-label" for="inlineRadio2">I think within</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd15" name="op8" value="15">
                            <label class="form-check-label" for="inlineRadio1">I look for activity</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd16" name="op8" value="16">
                            <label class="form-check-label" for="inlineRadio2">I seek for quiet time</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd17" name="op9" value="17">
                            <label class="form-check-label" for="inlineRadio1">I like to talk </label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd18" name="op9" value="18">
                            <label class="form-check-label" for="inlineRadio2">I like to listen</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd19" name="op10" value="19">
                            <label class="form-check-label" for="inlineRadio1">I share my personal experiences</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd20" name="op10" value="20">
                            <label class="form-check-label" for="inlineRadio2">I am unapproachable</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd21" name="op11" value="21">
                            <label class="form-check-label" for="inlineRadio1">I like new experiences</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd22" name="op11" value="22">
                            <label class="form-check-label" for="inlineRadio2">I like stability in my inner life</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd23" name="op12" value="23">
                            <label class="form-check-label" for="inlineRadio1">I want to be with people</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd24" name="op12" value="24">
                            <label class="form-check-label" for="inlineRadio2">I take a detached approach</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd25" name="op13" value="25">
                            <label class="form-check-label" for="inlineRadio1">I am influenced by external opinions</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd26" name="op13" value="26">
                            <label class="form-check-label" for="inlineRadio2">I am inner directed</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd27" name="op14" value="27">
                            <label class="form-check-label" for="inlineRadio1">I show emotions</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd28" name="op14" value="28">
                            <label class="form-check-label" for="inlineRadio2">I exercise restraint</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd29" name="op15" value="29">
                            <label class="form-check-label" for="inlineRadio1">I respond quickly</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd30" name="op15" value="30">
                            <label class="form-check-label" for="inlineRadio2">I resond carefully</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>
                </div>
            </section>

            <!-- THINKING or FEELING -->
            <section>
                <div class="container mt-4">
                    <h2 class="text-center mt-4">THINKING or FEELING</h2>
                    <ul class="ml-4">
                        <li>
                            <h5 class="mt-4">BEHAVIOUR</h5>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd1" name="op1" value="1">
                            <label class="form-check-label" for="inlineRadio1">I am Outgoing</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd2" name="op1" value="2">
                            <label class="form-check-label" for="inlineRadio2">I am Reserved</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd3" name="op2" value="3">
                            <label class="form-check-label" for="inlineRadio1"> I am Relaxed </label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd4" name="op2" value="4">
                            <label class="form-check-label" for="inlineRadio2">I am Intense</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd5" name="op3" value="5">
                            <label class="form-check-label" for="inlineRadio1">I am Enthusiastic</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd6" name="op3" value="6">
                            <label class="form-check-label" for="inlineRadio2">I am Aloof</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd7" name="op4" value="7">
                            <label class="form-check-label" for="inlineRadio1">I Speak-out in groups</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd8" name="op4" value="8">
                            <label class="form-check-label" for="inlineRadio2">I Absorb information in groups</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd9" name="op5" value="9">
                            <label class="form-check-label" for="inlineRadio1">I Energy grows at parties</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd10" name="op5" value="10">
                            <label class="form-check-label" for="inlineRadio2">I Energy wanes at parties</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd11" name="op6" value="11">
                            <label class="form-check-label" for="inlineRadio1">I have a large group of friends</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd12" name="op6" value="12">
                            <label class="form-check-label" for="inlineRadio2">I have a select few friends</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd13" name="op7" value="13">
                            <label class="form-check-label" for="inlineRadio1">I think out loud</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd14" name="op7" value="14">
                            <label class="form-check-label" for="inlineRadio2">I think within</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd15" name="op8" value="15">
                            <label class="form-check-label" for="inlineRadio1">I look for activity</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd16" name="op8" value="16">
                            <label class="form-check-label" for="inlineRadio2">I seek for quiet time</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd17" name="op9" value="17">
                            <label class="form-check-label" for="inlineRadio1">I like to talk </label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd18" name="op9" value="18">
                            <label class="form-check-label" for="inlineRadio2">I like to listen</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd19" name="op10" value="19">
                            <label class="form-check-label" for="inlineRadio1">I share my personal experiences</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd20" name="op10" value="20">
                            <label class="form-check-label" for="inlineRadio2">I am unapproachable</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd21" name="op11" value="21">
                            <label class="form-check-label" for="inlineRadio1">I like new experiences</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd22" name="op11" value="22">
                            <label class="form-check-label" for="inlineRadio2">I like stability in my inner life</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd23" name="op12" value="23">
                            <label class="form-check-label" for="inlineRadio1">I want to be with people</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd24" name="op12" value="24">
                            <label class="form-check-label" for="inlineRadio2">I take a detached approach</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd25" name="op13" value="25">
                            <label class="form-check-label" for="inlineRadio1">I am influenced by external opinions</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd26" name="op13" value="26">
                            <label class="form-check-label" for="inlineRadio2">I am inner directed</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd27" name="op14" value="27">
                            <label class="form-check-label" for="inlineRadio1">I show emotions</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd28" name="op14" value="28">
                            <label class="form-check-label" for="inlineRadio2">I exercise restraint</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd29" name="op15" value="29">
                            <label class="form-check-label" for="inlineRadio1">I respond quickly</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd30" name="op15" value="30">
                            <label class="form-check-label" for="inlineRadio2">I resond carefully</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>
                </div>
            </section>

            <!-- JUDGING or PERCEPTION -->
            <section>
                <div class="container mt-4">
                    <h2 class="text-center mt-4">JUDGING or PERCEPTION</h2>
                    <ul class="ml-4">
                        <li>
                            <h5 class="mt-4">BEHAVIOUR</h5>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd1" name="op1" value="1">
                            <label class="form-check-label" for="inlineRadio1">I am Outgoing</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd2" name="op1" value="2">
                            <label class="form-check-label" for="inlineRadio2">I am Reserved</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd3" name="op2" value="3">
                            <label class="form-check-label" for="inlineRadio1"> I am Relaxed </label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd4" name="op2" value="4">
                            <label class="form-check-label" for="inlineRadio2">I am Intense</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd5" name="op3" value="5">
                            <label class="form-check-label" for="inlineRadio1">I am Enthusiastic</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd6" name="op3" value="6">
                            <label class="form-check-label" for="inlineRadio2">I am Aloof</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd7" name="op4" value="7">
                            <label class="form-check-label" for="inlineRadio1">I Speak-out in groups</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd8" name="op4" value="8">
                            <label class="form-check-label" for="inlineRadio2">I Absorb information in groups</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd9" name="op5" value="9">
                            <label class="form-check-label" for="inlineRadio1">I Energy grows at parties</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd10" name="op5" value="10">
                            <label class="form-check-label" for="inlineRadio2">I Energy wanes at parties</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd11" name="op6" value="11">
                            <label class="form-check-label" for="inlineRadio1">I have a large group of friends</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd12" name="op6" value="12">
                            <label class="form-check-label" for="inlineRadio2">I have a select few friends</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd13" name="op7" value="13">
                            <label class="form-check-label" for="inlineRadio1">I think out loud</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd14" name="op7" value="14">
                            <label class="form-check-label" for="inlineRadio2">I think within</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd15" name="op8" value="15">
                            <label class="form-check-label" for="inlineRadio1">I look for activity</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd16" name="op8" value="16">
                            <label class="form-check-label" for="inlineRadio2">I seek for quiet time</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd17" name="op9" value="17">
                            <label class="form-check-label" for="inlineRadio1">I like to talk </label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd18" name="op9" value="18">
                            <label class="form-check-label" for="inlineRadio2">I like to listen</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd19" name="op10" value="19">
                            <label class="form-check-label" for="inlineRadio1">I share my personal experiences</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd20" name="op10" value="20">
                            <label class="form-check-label" for="inlineRadio2">I am unapproachable</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd21" name="op11" value="21">
                            <label class="form-check-label" for="inlineRadio1">I like new experiences</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd22" name="op11" value="22">
                            <label class="form-check-label" for="inlineRadio2">I like stability in my inner life</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd23" name="op12" value="23">
                            <label class="form-check-label" for="inlineRadio1">I want to be with people</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd24" name="op12" value="24">
                            <label class="form-check-label" for="inlineRadio2">I take a detached approach</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd25" name="op13" value="25">
                            <label class="form-check-label" for="inlineRadio1">I am influenced by external opinions</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd26" name="op13" value="26">
                            <label class="form-check-label" for="inlineRadio2">I am inner directed</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd27" name="op14" value="27">
                            <label class="form-check-label" for="inlineRadio1">I show emotions</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd28" name="op14" value="28">
                            <label class="form-check-label" for="inlineRadio2">I exercise restraint</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>

                    <div class="row">
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd29" name="op15" value="29">
                            <label class="form-check-label" for="inlineRadio1">I respond quickly</label>
                        </div>
                        <div class="col ml-4">
                            <input class="form-check-input" type="radio" id="rd30" name="op15" value="30">
                            <label class="form-check-label" for="inlineRadio2">I resond carefully</label>
                        </div>
                        <hr size="1" width="100%" color="black">
                    </div>
                </div>
            </section>



        </div>








        <div class="col-md-12 text-center">
            <input type="submit" name="Submit" value="SUBMIT" class="btn btn-primary ">
        </div>
    </form>
</section>



<?php include('./includes/footer.php');  ?>