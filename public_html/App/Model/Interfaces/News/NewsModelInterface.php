<?php
namespace App\Model\Interfaces\News;

interface NewsModelInterface
{
	public function getIds();

	public function getTitle();

	public function getShortDescription();

	public function getFullDescription();

	public function getPublicationDate();

    public function getDataList($partMin);

    public function getFullInfo();

}
?>
