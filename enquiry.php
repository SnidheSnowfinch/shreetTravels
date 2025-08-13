<?php include 'includes/header.php' ?>
<section class="banner-top">
  <h1>Enquiry</h1>
</section>
<div class="form-section-new">
    <h2>Do you have any enquiry?</h2>
    <form>
        <div>
            <label>Your Full Name</label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label>Your Email</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label>Your Phone</label>
            <input type="tel" name="phone" required>
        </div>
        <div>
            <label>Bus</label>
            <input type="text" name="bus">
        </div>
        <div>
            <label>Number of Days</label>
            <input type="number" name="days">
        </div>
        <div>
            <label>Pick Up Point</label>
            <input type="text" name="pickup">
        </div>
        <div>
            <label>Select Buses</label>
            <select name="bus_type">
                <option>Swift Dzire (4 + 1 Seater)</option>
                <option>Mini Bus</option>
                <option>Luxury Coach</option>
            </select>
        </div>
        <div>
            <label>Date of Journey</label>
            <input type="date" placeholder="dd-mm-yyyy" name="date">
        </div>
        <div>
            <label>Message</label>
            <textarea name="message"></textarea>
        </div>
        <div class="submit-btn">
            <button type="submit">Submit Now</button>
        </div>
    </form>
</div>
<?php include 'includes/footer.php' ?>
