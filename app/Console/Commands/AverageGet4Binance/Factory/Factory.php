<?php
namespace App\Console\Commands\AverageGet4Binance\Factory;

use App\Library\Dto\BinanceDto;

class Factory
{
    private $eth;
    private $ltc;
    private $bnb;
    private $neo;
    private $bcc;
    private $gas;
    private $hsr;
    private $mco;
    private $wtc;
    private $lrc;
    private $qtum;
    private $yoyo;
    private $omg;
    private $zrx;
    private $strat;
    private $sngls;
    private $bqx;
    private $knc;
    private $fun;
    private $snm;
    private $iota;
    private $link;
    private $xvg;
    private $ctr;
    private $salt;
    private $mda;
    private $mtl;
    private $sub;
    private $eos;
    private $snt;
    private $etc;
    private $mth;
    private $eng;
    private $dnt;
    private $zec;
    private $bnt;
    private $ast;
    private $dash;
    private $oax;
    private $icn;
    private $btg;
    private $evx;
    private $req;
    private $vib;
    private $trx;
    private $powr;
    private $ark;
    private $xrp;
    private $mod;
    private $enj;
    private $storj;
    private $ven;
    private $kmd;
    private $rcn;
    private $nuls;
    private $rdn;
    private $xmr;
    private $dlt;
    private $amb;
    private $bat;
    private $bcpt;
    private $arn;
    private $gvt;
    private $cdt;
    private $gxs;
    private $poe;
    private $qsp;
    private $bts;
    private $xzc;
    private $lsk;
    private $tnt;
    private $fuel;
    private $mana;
    private $bcd;
    private $dgd;
    private $adx;
    private $ada;
    private $ppt;
    private $cmt;
    private $xlm;
    private $cnd;
    private $lend;
    private $wabi;
    private $tnb;
    private $waves;
    private $gto;
    private $icx;
    private $ost;
    private $elf;
    private $aion;
    private $nebl;
    private $brd;
    private $edo;
    private $wings;
    private $nav;
    private $lun;
    private $trig;
    private $appc;
    private $vibe;
    private $rlc;
    private $ins;

    public function makeAverageGetDto($priceList)
    {
        foreach ($priceList as $price) {
            foreach ($price as $key => $value) {
                switch ($key) {
                    case 'eth' :
                        $this->eth[] = $value;
                        break;
                    case 'ltc' :
                        $this->ltc[] = $value;
                        break;
                    case 'bnb' :
                        $this->bnb[] = $value;
                        break;
                    case 'neo' :
                        $this->neo[] = $value;
                        break;
                    case 'bcc' :
                        $this->bcc[] = $value;
                        break;
                    case 'gas' :
                        $this->gas[] = $value;
                        break;
                    case 'hsr' :
                        $this->hsr[] = $value;
                        break;
                    case 'mco' :
                        $this->mco[] = $value;
                        break;
                    case 'wtc' :
                        $this->wtc[] = $value;
                        break;
                    case 'lrc' :
                        $this->lrc[] = $value;
                        break;
                    case 'qtum' :
                        $this->qtum[] = $value;
                        break;
                    case 'yoyo' :
                        $this->yoyo[] = $value;
                        break;
                    case 'omg' :
                        $this->omg[] = $value;
                        break;
                    case 'zrx' :
                        $this->zrx[] = $value;
                        break;
                    case 'strat' :
                        $this->strat[] = $value;
                        break;
                    case 'sngls' :
                        $this->sngls[] = $value;
                        break;
                    case 'bqx' :
                        $this->bqx[] = $value;
                        break;
                    case 'knc' :
                        $this->knc[] = $value;
                        break;
                    case 'fun' :
                        $this->fun[] = $value;
                        break;
                    case 'snm' :
                        $this->snm[] = $value;
                        break;
                    case 'iota' :
                        $this->iota[] = $value;
                        break;
                    case 'link' :
                        $this->link[] = $value;
                        break;
                    case 'xvg' :
                        $this->xvg[] = $value;
                        break;
                    case 'ctr' :
                        $this->ctr[] = $value;
                        break;
                    case 'salt' :
                        $this->salt[] = $value;
                        break;
                    case 'mda' :
                        $this->mda[] = $value;
                        break;
                    case 'mtl' :
                        $this->mtl[] = $value;
                        break;
                    case 'sub' :
                        $this->sub[] = $value;
                        break;
                    case 'eos' :
                        $this->eos[] = $value;
                        break;
                    case 'snt' :
                        $this->snt[] = $value;
                        break;
                    case 'etc' :
                        $this->etc[] = $value;
                        break;
                    case 'mth' :
                        $this->mth[] = $value;
                        break;
                    case 'eng' :
                        $this->eng[] = $value;
                        break;
                    case 'dnt' :
                        $this->dnt[] = $value;
                        break;
                    case 'zec' :
                        $this->zec[] = $value;
                        break;
                    case 'bnt' :
                        $this->bnt[] = $value;
                        break;
                    case 'ast' :
                        $this->ast[] = $value;
                        break;
                    case 'dash' :
                        $this->dash[] = $value;
                        break;
                    case 'oax' :
                        $this->oax[] = $value;
                        break;
                    case 'icn' :
                        $this->icn[] = $value;
                        break;
                    case 'btg' :
                        $this->btg[] = $value;
                        break;
                    case 'evx' :
                        $this->evx[] = $value;
                        break;
                    case 'req' :
                        $this->req[] = $value;
                        break;
                    case 'vib' :
                        $this->vib[] = $value;
                        break;
                    case 'trx' :
                        $this->trx[] = $value;
                        break;
                    case 'powr' :
                        $this->powr[] = $value;
                        break;
                    case 'ark' :
                        $this->ark[] = $value;
                        break;
                    case 'xrp' :
                        $this->xrp[] = $value;
                        break;
                    case 'mod' :
                        $this->mod[] = $value;
                        break;
                    case 'enj' :
                        $this->enj[] = $value;
                        break;
                    case 'storj' :
                        $this->storj[] = $value;
                        break;
                    case 'ven' :
                        $this->ven[] = $value;
                        break;
                    case 'kmd' :
                        $this->kmd[] = $value;
                        break;
                    case 'rcn' :
                        $this->rcn[] = $value;
                        break;
                    case 'nuls' :
                        $this->nuls[] = $value;
                        break;
                    case 'rdn' :
                        $this->rdn[] = $value;
                        break;
                    case 'xmr' :
                        $this->xmr[] = $value;
                        break;
                    case 'dlt' :
                        $this->dlt[] = $value;
                        break;
                    case 'amb' :
                        $this->amb[] = $value;
                        break;
                    case 'bat' :
                        $this->bat[] = $value;
                        break;
                    case 'bcpt' :
                        $this->bcpt[] = $value;
                        break;
                    case 'arn' :
                        $this->arn[] = $value;
                        break;
                    case 'gvt' :
                        $this->gvt[] = $value;
                        break;
                    case 'cdt' :
                        $this->cdt[] = $value;
                        break;
                    case 'gxs' :
                        $this->gxs[] = $value;
                        break;
                    case 'poe' :
                        $this->poe[] = $value;
                        break;
                    case 'qsp' :
                        $this->qsp[] = $value;
                        break;
                    case 'bts' :
                        $this->bts[] = $value;
                        break;
                    case 'xzc' :
                        $this->xzc[] = $value;
                        break;
                    case 'lsk' :
                        $this->lsk[] = $value;
                        break;
                    case 'tnt' :
                        $this->tnt[] = $value;
                        break;
                    case 'fuel' :
                        $this->fuel[] = $value;
                        break;
                    case 'mana' :
                        $this->mana[] = $value;
                        break;
                    case 'bcd' :
                        $this->bcd[] = $value;
                        break;
                    case 'dgd' :
                        $this->dgd[] = $value;
                        break;
                    case 'adx' :
                        $this->adx[] = $value;
                        break;
                    case 'ada' :
                        $this->ada[] = $value;
                        break;
                    case 'ppt' :
                        $this->ppt[] = $value;
                        break;
                    case 'cmt' :
                        $this->cmt[] = $value;
                        break;
                    case 'xlm' :
                        $this->xlm[] = $value;
                        break;
                    case 'cnd' :
                        $this->cnd[] = $value;
                        break;
                    case 'lend' :
                        $this->lend[] = $value;
                        break;
                    case 'wabi' :
                        $this->wabi[] = $value;
                        break;
                    case 'tnb' :
                        $this->tnb[] = $value;
                        break;
                    case 'waves' :
                        $this->waves[] = $value;
                        break;
                    case 'gto' :
                        $this->gto[] = $value;
                        break;
                    case 'icx' :
                        $this->icx[] = $value;
                        break;
                    case 'ost' :
                        $this->ost[] = $value;
                        break;
                    case 'elf' :
                        $this->elf[] = $value;
                        break;
                    case 'aion' :
                        $this->aion[] = $value;
                        break;
                    case 'nebl' :
                        $this->nebl[] = $value;
                        break;
                    case 'brd' :
                        $this->brd[] = $value;
                        break;
                    case 'edo' :
                        $this->edo[] = $value;
                        break;
                    case 'wings' :
                        $this->wings[] = $value;
                        break;
                    case 'nav' :
                        $this->nav[] = $value;
                        break;
                    case 'lun' :
                        $this->lun[] = $value;
                        break;
                    case 'trig' :
                        $this->trig[] = $value;
                        break;
                    case 'appc' :
                        $this->appc[] = $value;
                        break;
                    case 'vibe' :
                        $this->vibe[] = $value;
                        break;
                    case 'rlc' :
                        $this->rlc[] = $value;
                        break;
                    case 'ins' :
                        $this->ins[] = $value;
                        break;
                    default:
                        break;
                }
            }
        }

        $dto = new BinanceDto();
        $dto->setEth(collect($this->eth)->avg());
        $dto->setLtc(collect($this->ltc)->avg());
        $dto->setBnb(collect($this->bnb)->avg());
        $dto->setNeo(collect($this->neo)->avg());
        $dto->setBcc(collect($this->bcc)->avg());
        $dto->setGas(collect($this->gas)->avg());
        $dto->setHsr(collect($this->hsr)->avg());
        $dto->setMco(collect($this->mco)->avg());
        $dto->setWtc(collect($this->wtc)->avg());
        $dto->setLrc(collect($this->lrc)->avg());
        $dto->setQtum(collect($this->qtum)->avg());
        $dto->setYoyo(collect($this->yoyo)->avg());
        $dto->setOmg(collect($this->omg)->avg());
        $dto->setZrx(collect($this->zrx)->avg());
        $dto->setStrat(collect($this->strat)->avg());
        $dto->setSngls(collect($this->sngls)->avg());
        $dto->setBqx(collect($this->bqx)->avg());
        $dto->setKnc(collect($this->knc)->avg());
        $dto->setFun(collect($this->fun)->avg());
        $dto->setSnm(collect($this->snm)->avg());
        $dto->setIota(collect($this->iota)->avg());
        $dto->setLink(collect($this->link)->avg());
        $dto->setXvg(collect($this->xvg)->avg());
        $dto->setCtr(collect($this->ctr)->avg());
        $dto->setSalt(collect($this->salt)->avg());
        $dto->setMda(collect($this->mda)->avg());
        $dto->setMtl(collect($this->mtl)->avg());
        $dto->setSub(collect($this->sub)->avg());
        $dto->setEos(collect($this->eos)->avg());
        $dto->setSnt(collect($this->snt)->avg());
        $dto->setEtc(collect($this->etc)->avg());
        $dto->setMth(collect($this->mth)->avg());
        $dto->setEng(collect($this->eng)->avg());
        $dto->setDnt(collect($this->dnt)->avg());
        $dto->setZec(collect($this->zec)->avg());
        $dto->setBnt(collect($this->bnt)->avg());
        $dto->setAst(collect($this->ast)->avg());
        $dto->setDash(collect($this->dash)->avg());
        $dto->setOax(collect($this->oax)->avg());
        $dto->setIcn(collect($this->icn)->avg());
        $dto->setBtg(collect($this->btg)->avg());
        $dto->setEvx(collect($this->evx)->avg());
        $dto->setReq(collect($this->req)->avg());
        $dto->setVib(collect($this->vib)->avg());
        $dto->setTrx(collect($this->trx)->avg());
        $dto->setPowr(collect($this->powr)->avg());
        $dto->setArk(collect($this->ark)->avg());
        $dto->setXrp(collect($this->xrp)->avg());
        $dto->setMod(collect($this->mod)->avg());
        $dto->setEnj(collect($this->enj)->avg());
        $dto->setStorj(collect($this->storj)->avg());
        $dto->setVen(collect($this->ven)->avg());
        $dto->setKmd(collect($this->kmd)->avg());
        $dto->setRcn(collect($this->rcn)->avg());
        $dto->setNuls(collect($this->nuls)->avg());
        $dto->setRdn(collect($this->rdn)->avg());
        $dto->setXmr(collect($this->xmr)->avg());
        $dto->setDlt(collect($this->dlt)->avg());
        $dto->setAmb(collect($this->amb)->avg());
        $dto->setBat(collect($this->bat)->avg());
        $dto->setBcpt(collect($this->bcpt)->avg());
        $dto->setArn(collect($this->arn)->avg());
        $dto->setGvt(collect($this->gvt)->avg());
        $dto->setCdt(collect($this->cdt)->avg());
        $dto->setGxs(collect($this->gxs)->avg());
        $dto->setPoe(collect($this->poe)->avg());
        $dto->setQsp(collect($this->qsp)->avg());
        $dto->setBts(collect($this->bts)->avg());
        $dto->setXzc(collect($this->xzc)->avg());
        $dto->setLsk(collect($this->lsk)->avg());
        $dto->setTnt(collect($this->tnt)->avg());
        $dto->setFuel(collect($this->fuel)->avg());
        $dto->setMana(collect($this->mana)->avg());
        $dto->setBcd(collect($this->bcd)->avg());
        $dto->setDgd(collect($this->dgd)->avg());
        $dto->setAdx(collect($this->adx)->avg());
        $dto->setAda(collect($this->ada)->avg());
        $dto->setPpt(collect($this->ppt)->avg());
        $dto->setCmt(collect($this->cmt)->avg());
        $dto->setXlm(collect($this->xlm)->avg());
        $dto->setCnd(collect($this->cnd)->avg());
        $dto->setLend(collect($this->lend)->avg());
        $dto->setWabi(collect($this->wabi)->avg());
        $dto->setTnb(collect($this->tnb)->avg());
        $dto->setWaves(collect($this->waves)->avg());
        $dto->setGto(collect($this->gto)->avg());
        $dto->setIcx(collect($this->icx)->avg());
        $dto->setOst(collect($this->ost)->avg());
        $dto->setElf(collect($this->elf)->avg());
        $dto->setAion(collect($this->aion)->avg());
        $dto->setNebl(collect($this->nebl)->avg());
        $dto->setBrd(collect($this->brd)->avg());
        $dto->setEdo(collect($this->edo)->avg());
        $dto->setWings(collect($this->wings)->avg());
        $dto->setNav(collect($this->nav)->avg());
        $dto->setLun(collect($this->lun)->avg());
        $dto->setTrig(collect($this->trig)->avg());
        $dto->setAppc(collect($this->appc)->avg());
        $dto->setVibe(collect($this->vibe)->avg());
        $dto->setRlc(collect($this->rlc)->avg());
        $dto->setIns(collect($this->ins)->avg());

        return $dto;

    }
}