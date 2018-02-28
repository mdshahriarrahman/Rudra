<div id="main-form">
    <h3 class="form-title">IMPORT DOT MART</h3>
    <form action="<?php echo base_url()?>index.php/home/email" method="post">

        <div class="alert-info text-center" style="padding: 15px">
            Post a link from USA/UK/India based site. or from aliexpress.com
        </div>
        <div class="form-group">
            <input type="text" name="product-link" class="form-control" placeholder="https://www.amazon.com/Apple-Macbook/..." required>
        </div>
        <div class="form-group">
            <input type="email" name="useremail" class="form-control" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
            <label class="col-form-label">Add note (optional)</label>
            <input type="text" name="add-note" class="form-control" placeholder="Model, box, color, specific request.."
        </div>
        <div class="form-group">
            <label class="col-form-label">Item Quantity</label>
            <select name="quantity" id="" class="form-control">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div class="text-center">
            <input type="submit" value="send" class="btn btn-lg btn-primary">
        </div>
    </form>
</div>