<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Compose bulk email</h3>
    </div>

    <form role="form">
        <div class="box-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>From (email)</label>
                        <input type="text" name="from" requireds class="form-control" value="emmanuel@axxend.com" />
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>From (name)</label>
                        <input type="text" name="from_name" requireds class="form-control" value="Emmanuel Anyele" />
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Subject</label>
                <input type="text" name="subject" requireds class="form-control" value="Axxend Special" />
            </div>
            <div class="form-group">
                <label>Recipients</label>
                <textarea type="recipients" id="recipients" onchange="recipients_no();" requireds name="recipients" class="form-control" rows="8"></textarea>
                <small class="text-muted">Paste your email addresses here separated by comma (,). You have <span id="recipients_no"></span> email(s)</small>
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea type="message" requireds name="message" class="form-control" rows="8"></textarea>
                <small class="text-muted">Type your message here</small>
            </div>
        </div>

        <div class="box-footer">
            <button type="submit" name="submit" value="compose" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>


<script>
    $(document).ready(function() {
        recipients_no();
    });

    function recipients_no() {
        var str = $('#recipients').val();
        if (str) {
            var cno = str.split(',');
            $('#recipients_no').html(cno.length);
        } else {
            $('.recipients_no').val(0);
        }
    }
</script>