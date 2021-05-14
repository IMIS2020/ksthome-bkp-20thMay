
<!-- mail template  -->
{{ $data['name'] }}

<!-- Controller  -->
use Illuminate\Support\Facades\Mail;
use App\Mail\ReviewMail\ReturnMail;

$data = array
        (
            'name'      =>  $request->name,
            'message'   =>   $request->message
        );
            Mail::to($request->email)->send(new ReturnMail($data));