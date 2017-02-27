<div class="form-container">
    <h2>Hotel Deals</h2>
    <form class="navbar-form " role="search" method="post">
        <div class="col-lg-12">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Destination" name="Destination" id="Destination">
            </div><!-- /input-group -->
        </div><!-- /.col-lg-12 -->
        <div class="date-container">
            <div class="col-lg-6">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="start Date" name="startDate" id="startDate">
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="End Date" name="endDate" id="endDate">
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
        </div>
        <div class="rate-container">
            <div class="col-lg-6">
                <div class="form-group">
                    <input type="number" class="form-control" placeholder="minimum Star Rating" name="minStarRating" id="minStarRating">
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="form-group">
                    <input type="number" class="form-control" placeholder="maximum Star Rating" name="maxStarRating" id="maxStarRating">
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
        </div>
        <div class="total-rate-container">
            <div class="col-lg-6">
                <div class="form-group">
                    <input type="number" class="form-control" placeholder="minimum Total Rate" name="minTotalRate" id="minTotalRate">
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="form-group">
                    <input type="number" class="form-control" placeholder="maximum Total Rate" name="maxTotalRate" id="maxTotalRate">
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
        </div>
        <div class="guest-rate-container">
            <div class="col-lg-6">
                <div class="form-group">
                    <input type="number" class="form-control" placeholder="minimum Guest Rating" name="minGuestRating" id="minGuestRating">
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="form-group">
                    <input type="number" class="form-control" placeholder="maximum Guest Rating" name="maxGuestRating" id="maxGuestRating">
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
        </div>
        <div class="col-lg-12 submitBtn">
            <button type="submit" class="btn btn-default">Search</button>
        </div>
    </form>
</div>