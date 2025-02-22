<?php

namespace App\FrontModule\Presenters;

class HomepagePresenter extends BasePresenter
{
	public function renderDefault()
	{
		$participants = $this->model->registrations->findLatest();
		$this->template->count = $participants->count();

        $programs = $this->model->programs->findAll()->fetchAll();
        shuffle($programs);
        $this->template->programs = $programs;

//		$this->setView('closed');
	}

}
