<link href="css/book.css" rel="stylesheet" />
<!-- The Modal -->
<div id="Book_now" class="modal fade section" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-lg section-center" role="document">
<div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signup-heading">Booking</h5>
						</div>
            <div class="modal-body">
						<form id="Book-now" class="form" role="form" method="post" action="api/book_submit.php">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Name</span>
										<input class="form-control" name="name" type="text" placeholder="Enter your name">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Email</span>
										<input class="form-control" name="email" type="email" placeholder="Enter your email">
									</div>
								</div>
							</div>
							<div class="form-group">
								<span class="form-label">Phone</span>
								<input class="form-control" name="phone" type="tel" placeholder="Enter your phone number">
							</div>
							<div class="form-group">
								<span class="form-label">Check in</span>
								<input class="form-control" name=" check_in" type="date" required>
							</div>
							<div class="form-group">
								<span class="form-label">Check out</span>
								<input class="form-control" name="check_out" type="date" required>
							</div>
							<div class="row">
								<div class="col-sm-5">
									<div class="form-group">
										<span class="form-label">Rooms</span>
										<select class="form-control"  name="rooms">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                    <span class="select-arrow"></span>
								  </div> 
                </div>
							</div>
							</div>
							<div class="form-btn">
								<button class="submit-btn" data-dismiss="modal" >Book Now</button>
							</div>
						</form>
</div>
</div>
