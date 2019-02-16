<?php
declare(strict_types = 1);

namespace packages\BaconQrCode\Renderer;

use packages\BaconQrCode\Encoder\QrCode;

interface RendererInterface
{
    public function render(QrCode $qrCode) : string;
}
