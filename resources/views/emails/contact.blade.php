@component('mail::message')
# Contact OntheGorelax for more information

**Sender Information**
**Name:** {{ $data['name'] }}

**Contact Number:** {{ $data [('contact')]}}

**Email:** {{ $data['email'] }}

**Subject:** {{ $data['subject'] }}

**Message:**
{{ $data['message'] }}

Thanks,
@endcomponent
