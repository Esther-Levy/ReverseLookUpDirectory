<div class="row">
    <div class="col-md-12">
        <form id='searchForm'>
            <div class="form-group phoneGroup">
                <label for="InputPhone">Search by Phone Number</label><span id="InputSearchPhone-info"
                                                                            class="info"></span>
                <input type="tel" name="InputPhone" class="form-control" id="InputPhone" aria-describedby="InputPhone"
                       placeholder="Enter Phone Number">
            </div>
            <div class="form-group lastNameGroup">
                <label for="InputLastName">Search by Last Name</label><span id="InputSearchLastName-info"
                                                                            class="info"></span>
                <input type="text" name="InputLastName" class="form-control" id="InputLastName"
                       aria-describedby="InputLastName"
                       placeholder="Last Name">
            </div>
            <input type="hidden" name="selected" id="inputHidden" value="">
            <button type="submit" id="submit" class="btn btn-primary">Search<span class="output_message"></span>
            </button>
        </form>
    </div>
</div>
<div class="row" style="margin-top:20px;">
    <div class="col-md-12" id="response">
        <div class='response'>
        </div>
    </div>
</div>
