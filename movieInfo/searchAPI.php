<?php
class MovieApiManager
{
    private $searchUrl = "https://watcha.net/search.json?query="; // 오픈API 호출URL
    public function query($query)
    {
        $url = sprintf("%s%s", $this->searchUrl,$query);
        $data =file_get_contents($url);
        $json = json_decode($data);
        return $json;
    }

    /**
     * API의 결과를 Array 형태로 반환하는 사용자 커스터마이징 메소드
     * XML을 직접 parsing 하여 Array형태로 변환한다
     */
    public function getMovieData($query)
    {
        $json = $this->query($query);
        $result = array();
        $movie = array();

        foreach ($json->results as $data) {
            $result['title'] = (string)$data->title;
            $result['image'] = (string)$data->poster->small;
            $result['year'] = (string)$data->year;
            $result['nation'] = (string)$data->nation;
            $result['rating'] = (int)$data->action->rating;
            $movie[] = $result;
        }

        return $movie;
    }
}
?>