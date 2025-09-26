<?php
    namespace App\Http\Requests;

    use App\Models\User;
    use Illuminate\Foundation\Http\FormRequest;
    use Illuminate\Validation\Rule;

    class ProfileUpdateRequest extends FormRequest {
        public function rules(): array {
            return [
                'name' => ['required','string','max:255'],
                'username' => ['nullable','string','lowercase','max:255',Rule::unique(User::class)->ignore($this->user()->id)],
                'image' => ['nullable','image','max:2048'],
                'bio' => ['nullable'],
                'email' => ['required','string','lowercase','email','max:255',Rule::unique(User::class)->ignore($this->user()->id),],
            ];
        }
    }
