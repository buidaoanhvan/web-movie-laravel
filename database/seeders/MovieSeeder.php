<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('movies')->insert([
            [
                'tenphim' => 'Mulan1',
                'hinhanh' => 'https://image.tmdb.org/t/p/w500/aKx1ARwG55zZ0GpRvU2WrGrCG9o.jpg',
                'theloai' => 'Tình Cảm',
                'ngaysanxuat' => '2020-09-04',
                'danhgia' => '73%',
                'dienvien' => 'Lưu Diệc Phi',
                'mota' => 'Nội dung phim kể về cô gái Hoa Mộc Lan - do Lưu Diệc Phi thủ vai - là một cô gái giả làm nam nhân thay cha đi tòng quân, với võ nghệ và tài trí hơn người, cô đã mang lại vinh dự cho gia tộc. Tuy nhiên cô đã bị phát hiện là nữ, nhưng đội trưởng Tung (Chân Tử Đan) vẫn giữ cô lại và cùng nhau sát cánh chiến đấu để bảo vệ an nguy cho đất nước.',
                'link' => 'https://streamable.com/e/vwsujw?autoplay=1&loop=0',
            ],
            [
                'tenphim' => 'Mulan2',
                'hinhanh' => 'https://image.tmdb.org/t/p/w500/aKx1ARwG55zZ0GpRvU2WrGrCG9o.jpg',
                'theloai' => 'Tình Cảm',
                'ngaysanxuat' => '2020-09-04',
                'danhgia' => '73%',
                'dienvien' => 'Lưu Diệc Phi',
                'mota' => 'Nội dung phim kể về cô gái Hoa Mộc Lan - do Lưu Diệc Phi thủ vai - là một cô gái giả làm nam nhân thay cha đi tòng quân, với võ nghệ và tài trí hơn người, cô đã mang lại vinh dự cho gia tộc. Tuy nhiên cô đã bị phát hiện là nữ, nhưng đội trưởng Tung (Chân Tử Đan) vẫn giữ cô lại và cùng nhau sát cánh chiến đấu để bảo vệ an nguy cho đất nước.',
                'link' => 'https://streamable.com/e/vwsujw?autoplay=1&loop=0',
            ],
            [
                'tenphim' => 'Mulan3',
                'hinhanh' => 'https://image.tmdb.org/t/p/w500/aKx1ARwG55zZ0GpRvU2WrGrCG9o.jpg',
                'theloai' => 'Tình Cảm',
                'ngaysanxuat' => '2020-09-04',
                'danhgia' => '73%',
                'dienvien' => 'Lưu Diệc Phi',
                'mota' => 'Nội dung phim kể về cô gái Hoa Mộc Lan - do Lưu Diệc Phi thủ vai - là một cô gái giả làm nam nhân thay cha đi tòng quân, với võ nghệ và tài trí hơn người, cô đã mang lại vinh dự cho gia tộc. Tuy nhiên cô đã bị phát hiện là nữ, nhưng đội trưởng Tung (Chân Tử Đan) vẫn giữ cô lại và cùng nhau sát cánh chiến đấu để bảo vệ an nguy cho đất nước.',
                'link' => 'https://streamable.com/e/vwsujw?autoplay=1&loop=0',
            ]
        ]);
    }
}
