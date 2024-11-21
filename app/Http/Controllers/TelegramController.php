<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TelegramController extends Controller
{
    public function sendMessage(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'message' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $title = $request->input('title');
        $message = $request->input('message');

        // Faylni saqlash
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->getRealPath(); // Faylning to‘liq yo‘lini olish
        } else {
            return redirect()->back()->with('error', 'Rasm yuklanmadi.');
        }

        // Telegramga yuboriladigan matn
        $text = "*Sarlavha:* $title\n\n*Xabar:* $message";

        // Telegram API parametrlari
        $botToken = '7465091200:AAEa5o5QZQI4ROKl4B74lpPT8pm5AyjqsR8';
        $chatId = '1443705227';

        // Faylni multipart/form-data bilan yuborish
        $response = Http::attach(
            'photo', file_get_contents($imagePath), $request->file('image')->getClientOriginalName()
        )->post("https://api.telegram.org/bot$botToken/sendPhoto", [
            'chat_id' => $chatId,
            'caption' => $text,
            'parse_mode' => 'Markdown',
        ]);

        // Javobni tekshirish
        if ($response->successful()) {
            return redirect()->back()->with('success', 'Xabar muvaffaqiyatli yuborildi!');
        } else {
            $error = $response->json()['description'] ?? 'Xatolik yuz berdi';
            return redirect()->back()->with('error', "Xabar yuborishda xatolik: $error");
        }
    }
}
