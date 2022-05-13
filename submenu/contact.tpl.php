<div>
<h1 class="center">Mewtopia Cat Rescue</h1>
<h3 class="center"><address>1010 South Yates Road Memphis, Tn 38119</address></h3>
<h3 class="center">Phone: (901) 503-9328 </h3>
<h3 class="center">Hours: Tue, Thu, Sat 12-2 <strong>By Appointment Only</strong></p>
<h3 class="center">E-mail <a href="#here">Us</a></p>


<!--
3. Excercise solution: This is the "Contact form" that helps sending e-mails to the website owner. 
But instead of sending the e-mail, show the form data as the content of a 6th page (message.php). 
Validate the form at client and server side.  
Client validate at index.tpl.php with check() function. 
Server side validate at message.php -->
<br>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1154.0367991636554!2d-89.87713506929404!3d35.10398937853265!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x887f8465d22caafb%3A0x137940df687b0461!2sMewtopia%20Cat%20Rescue!5e0!3m2!1shu!2shu!4v1652214880868!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><h1 id="here" class="center">Write us an email:&nbsp</h1>
<div class="container">
    <form name="message" method='post' action="./message.php" onsubmit="return.check();"> 

  <div class="row">
    <div class="col-25">
      <label for="name">Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="name" name="name" placeholder="Full Name">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="e-mail">E-mail address</label>
    </div>
    <div class="col-75">
      <input type="text" id="e-mail" name="e-mail" placeholder="We only accept regular email addresses!">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="subject">Subject</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="subject" placeholder="Minimum 5 characters"></textarea>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="message">Message</label>
    </div>
    <div class="col-75">
      <textarea id="message" name="message" placeholder="Minimum 10 characters" style="height:200px"></textarea>
    </div>
  </div>

  <br>
  <div class="row">
    <input type="submit" name='send' id='send' value="Send"> 
    <button onclick="check();" type="button">Check</button><br><br> 
  </div>
  </form>
</div>



</div>
<br><br><br><br><br><br><br><br><br><br>
</div>