<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UserService
{
    public function getAll()
    {
        return User::latest()->get();
    }

    public function getById($id)
    {
        return User::find($id);
    }

    public function create(array $data)
    {
        return User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function update($id, array $data)
    {
        $user = User::findOrFail($id);

        $user->update([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        return response()->json([
            'status'  => 'success',
            'message' => 'Data user berhasil diperbaharui!',
            'data'    => $user,
        ]);
    }

    public function saveGoogleAvatar($avatarUrl, $namaFile)
    {
        // Ambil isi file dari URL Google
        $avatarContents = file_get_contents($avatarUrl);

        // Buat nama file unik, misal pakai ID Google
        $filename = 'avatars/' . $namaFile . '.jpg';

        // Simpan ke storage/app/public/avatars
        Storage::disk('public')->put($filename, $avatarContents);

        // Kembalikan path relatif (misal untuk disimpan di DB)
        return $filename;
    }

    public function savePhotoProfile(User $user, UploadedFile $avatar)
    {
        $timestamp = now()->format('YmdHis');
        $extension = $avatar->getClientOriginalExtension();
        $safeName = Str::slug($user->name, '_');
        $filename = "{$timestamp}_{$safeName}.{$extension}";

        // Hapus foto lama
        if ($user->avatar) Storage::disk('public')->delete($user->avatar);

        // Simpan foto baru
        $path = $avatar->storeAs('avatars', $filename, 'public');

        // Simpan ke user
        $user->avatar = $path;
        $user->save();

        return $user;
    }

    public function updateProfile(User $user, array $data)
    {
        $pengajar = $user->pengajar;
        $pengajar->fill($data);
        $pengajar->save();

        return $pengajar;
    }

    public function updateEmail(User $user, array $data)
    {
        // Verifikasi password
        if (!Hash::check($data['confirmemailpassword'], $user->password)) {
            return [
                'success' => false,
                'message' => 'Password tidak sesuai.',
            ];
        }

        // Update email
        $user->update(['email' => $data['emailaddress']]);
        return [
            'success' => true,
            'message' => 'Email has been updated successfully!',
            'email'   => $user->email,
        ];
    }

    public function updatePassword(User $user, array $data)
    {
        // Verifikasi password lama
        if (!Hash::check($data['currentpassword'], $user->password)) {
            return [
                'success' => false,
                'message' => 'Password lama tidak sesuai.',
            ];
        }

        // Pastikan password baru dan konfirmasi sama
        if ($data['newpassword'] !== $data['confirmpassword']) {
            return [
                'success' => false,
                'message' => 'Konfirmasi password baru tidak cocok.',
            ];
        }

        // Pastikan password baru tidak sama dengan password lama
        if (Hash::check($data['newpassword'], $user->password)) {
            return [
                'success' => false,
                'message' => 'Password baru tidak boleh sama dengan password lama.',
            ];
        }

        // Update password baru
        $user->update([
            'password' => Hash::make($data['newpassword']),
        ]);

        return [
            'success' => true,
            'message' => 'Password berhasil diperbarui!',
        ];
    }


    public function assignRole(User $user, array $data)
    {
        $role = $data['role'];
        if ($user->hasRole('user')) $user->removeRole('user');
        $user->assignRole($role);

        // // Cek pengajar termasuk yang soft delete
        // $pengajar = Pengajar::withTrashed()
        //     ->where('user_id', $user->id)
        //     ->first();

        // if ($pengajar) {
        //     // kalau soft delete → restore
        //     if ($pengajar->trashed()) $pengajar->restore();
        // } else {
        //     // belum ada → buat baru
        //     Pengajar::create([
        //         'nama_lengkap' => $user->name,
        //         'user_id'      => $user->id,
        //     ]);
        // }

        return response()->json([
            'success' => true,
            'message' => "Role '{$role}' berhasil diberikan kepada {$user->name}",
        ]);
    }

    public function removeRole(User $user, array $data)
    {
        $role = $data['role'];

        // Hapus role yang diminta
        if ($user->hasRole($role)) $user->removeRole($role);

        return response()->json([
            'success' => true,
            'message' => "Role '{$role}' berhasil dihapus dari {$user->name}",
        ]);
    }

    public function destroy($id)
    {
        // Pengajar::where('user_id', $id)->firstOrFail()->delete();
        User::findOrFail($id)->delete();
        return response()->json(['success' => true]);
    }
}
