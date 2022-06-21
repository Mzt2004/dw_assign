<?php include('header.php') ?>

<img src=".//photos and vds/contact photo.jpg" alt="contact photo" class="contactimg">
<Section>
    <h1 class="contacth1">Contact</h1>
    <main>
        <h2>Contact Us</h2>
        <form>
            <div class="innerform">
                <label>Select your concern</label>
                <select name="concern-type" id="Contact-concern">
                    <option value="Advertising">Advertising</option>
                    <option value="Customer-Service">Customer Service</option>
                    <option value="Quality">Quality</option>
                    <option value="Others">Others</option>
                </select>
            </div>
            <div class="innerform">
                <label for="firstname">First Name</label>
                <input type="text" name="firstname" id="firstname">
            </div>
            <div class="innerform">
                <label for="lastname">Last Name</label>
                <input type="text" name="lastname" id="lastname">
            </div>
            <div class="innerform">
                <label for="phno">Phone Number</label>
                <input type="number" name="phno" id="phno">
            </div>
            <div class="innerform">
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </div>
            <div class="innerform">
                <label for="thoughts">How can we help you?</label>
                <textarea name="thoughts" id="thoughts" rows="8"></textarea>
            </div>
            <div class="contactbtn">
             <button>
                 Submit!
             </button>
         </div>
     </form>
 </main>
</Section>
<?php include('footer.php') ?>