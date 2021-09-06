<?php

namespace App;

class AbstractFactoryTest {
    public function provideFactory()
    {
        return [
            [new UnixWriterFactory()],
        ];
    }

    public function CreateCsvWriterOnUnix(WriterFactory $writerFactory, $array)
    {
        return $writerFactory->createCsvWriter()->write($array);
    }
}