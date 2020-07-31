<?php
declare(strict_types=1);

namespace Plugins\NavigationTimings;

use Plugins\NavigationTimings\Metrics\NtDomInt;
use Plugins\NavigationTimings\Metrics\NtNavSt;
use Plugins\NavigationTimings\Metrics\NtFetSt;
use Plugins\NavigationTimings\Metrics\NtDnsSt;
use Plugins\NavigationTimings\Metrics\NtDnsEnd;
use Plugins\NavigationTimings\Metrics\NtConSt;
use Plugins\NavigationTimings\Metrics\NtConEnd;
use Plugins\NavigationTimings\Metrics\NtNavType;
use Plugins\NavigationTimings\Metrics\NtProtocol;
use Plugins\NavigationTimings\Metrics\NtRedCnt;
use Plugins\NavigationTimings\Metrics\NtReqSt;
use Plugins\NavigationTimings\Metrics\NtResSt;
use Plugins\NavigationTimings\Metrics\NtResEnd;
use Plugins\NavigationTimings\Metrics\NtDomloading;
use Plugins\NavigationTimings\Metrics\NtDomcontloadedSt;
use Plugins\NavigationTimings\Metrics\NtDomcontloadedEnd;
use Plugins\NavigationTimings\Metrics\NtDomcomp;
use Plugins\NavigationTimings\Metrics\NtLoadSt;
use Plugins\NavigationTimings\Metrics\NtLoadEnd;
use Plugins\NavigationTimings\Metrics\NtTrnSize;
use Plugins\NavigationTimings\Metrics\NtUnloadSt;
use Plugins\NavigationTimings\Metrics\NtUnloadEnd;
use Plugins\NavigationTimings\Metrics\NtEncSsize;
use Plugins\NavigationTimings\Metrics\NtDecSize;

class NavigationTimings
{
    private $metricsMapping = [
        'nt_nav_st' => NtNavSt::class,
        'nt_fet_st' => NtFetSt::class,
        'nt_dns_st' => NtDnsSt::class,
        'nt_dns_end' => NtDnsEnd::class,
        'nt_con_st' => NtConSt::class,
        'nt_con_end' => NtConEnd::class,
        'nt_req_st' => NtReqSt::class,
        'nt_res_st' => NtResSt::class,
        'nt_res_end' => NtResEnd::class,
        'nt_domloading' => NtDomloading::class,
        'nt_domint' => NtDomInt::class,
        'nt_domcontloaded_st' => NtDomcontloadedSt::class,
        'nt_domcontloaded_end' => NtDomcontloadedEnd::class,
        'nt_domcomp' => NtDomcomp::class,
        'nt_load_st' => NtLoadSt::class,
        'nt_load_end' => NtLoadEnd::class,
        'nt_unload_st' => NtUnloadSt::class,
        'nt_unload_end' => NtUnloadEnd::class,
        'nt_enc_size' => NtEncSsize::class,
        'nt_dec_size' => NtDecSize::class,
        'nt_trn_size' => NtTrnSize::class,
        'nt_protocol' => NtProtocol::class,
        'nt_red_cnt' => NtRedCnt::class,
        'nt_nav_type' => NtNavType::class,
    ];

    private $metrics = [
        'nt_nav_st' => 0,
        'nt_fet_st' => 0,
        'nt_dns_st' => 0,
        'nt_dns_end' => 0,
        'nt_con_st' => 0,
        'nt_con_end' => 0,
        'nt_req_st' => 0,
        'nt_res_st' => 0,
        'nt_res_end' => 0,
        'nt_domloading' => 0,
        'nt_domint' => 0,
        'nt_domcontloaded_st' => 0,
        'nt_domcontloaded_end' => 0,
        'nt_domcomp' => 0,
        'nt_load_st' => 0,
        'nt_load_end' => 0,
        'nt_unload_st' => 0,
        'nt_unload_end' => 0,
        'nt_enc_size' => 0,
        'nt_dec_size' => 0,
        'nt_trn_size' => 0,
        'nt_protocol' => '',
        'nt_red_cnt' => 0,
        'nt_nav_type' => 0,
    ];

    public function getMetrics(): array
    {
        foreach($this->metrics as $key => $v)
        {
            $class = new $this->metricsMapping[$key];
            $this->metrics[$key] = $class->generate();
            unset($class);
        }

        return $this->metrics;
    }
}
