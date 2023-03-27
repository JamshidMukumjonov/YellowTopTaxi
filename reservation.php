<?php $page = 'Reservation';
   include 'header.php'; ?>
<div class="pv-back">
   <div class="container">
      <h2>Online Reservation</h2>
      <p><a href="index.php">Home</a> &nbsp; | &nbsp; Reservation</p>
   </div>
</div>
<div id="quote-box">
   <div class="container">
      <div class="row">
         <div class="col-md-10 offset-lg-1">
            <h2 style="margin-top:-5px;">Reserve Now</h2>
         </div>
         <div class="sub-content">
            <div class="row thank-message">
               <div class="col-md-10">
               </div>
            </div>
                <!--booking-form-->
                <div class="taxi-booking padding">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                            <form action="book-ride.php" method="POST">
                                <div class="taxi-booking-form">
                                    <div class="form-field">
                                        <label for="full-name">Full Name</label>
                                        <input type="text" id="name" name="name" required>
                                    </div>
                                    <div class="form-field">
                                        <label for="phone">Phone Number</label>
                                        <input type="tel" id="phone" name="phone" required>
                                    </div>
                                    <div class="form-field">
                                        <label for="luggage">Number of Luggage</label>
                                        <select id="luggage" name="luggage">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="form-field">
                                        <label for="passengers">Number of Passengers</label>
                                        <select id="passenger" name="passenger">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="form-field">
                                        <label for="start-dest">Pickup Location</label>
                                        <input type="text" id="start-dest" name="start-dest" required>
                                    </div>
                                    <div class="form-field">
                                        <label for="end-dest">Drop-off Location</label>
                                        <input type="text" id="end-dest" name="end-dest" required>
                                    </div>
                                    <div class="form-field">
                                        <label for="ride-date">Ride Date</label>
                                        <input type="date" id="ride-date" name="ride-date" required>
                                    </div>
                                    <div class="form-field">
                                        <label for="ride-time">Ride Time</label>
                                        <input type="time" id="ride-time" name="ride-time" required>
                                    </div>
                                    <div class="form-field">
                                        <button id="submit" class="default-btn" type="submit">Book Your Taxi</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--/.booking-form-->
         </div>
      </div>
   </div>
</div>
<?php include 'footer.php'; ?>