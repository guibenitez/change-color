<?php

namespace Guilherme\ChangeColor\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ChangeColorButton extends Command
{
    const COLOR = 'color';
    const WEBSITEID = 'website_id';

    protected $_storeManager;

    public function __construct(
        \Magento\Store\Model\StoreManagerInterface $storeManager
    ) {
        parent::__construct();
        $this->_storeManager = $storeManager;
    }

    protected function configure()
    {
        $this->setName('color:change');
        $this->setDescription('Esse comando muda a cor de todos os botões da loja desejada');

        //add argument to our command
        $this->addArgument(self::COLOR, InputArgument::REQUIRED, 'cor');
        $this->addArgument(self::WEBSITEID, InputArgument::REQUIRED, 'website id');

        parent::configure();
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $website_id = $input->getArgument(self::WEBSITEID);
        $this->_storeManager->setCurrentStore($website_id);
        $bg = $input->getArgument(self::COLOR);
        $output->writeln("Cor alterada com sucesso para: #$bg");
    }
}