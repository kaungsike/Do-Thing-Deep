import React from 'react'
import Container from '../components/Container'
import Module from '../components/Module'
import { TfiDropbox } from "react-icons/tfi";
import { TfiShoppingCartFull } from "react-icons/tfi";
import { TfiReceipt } from "react-icons/tfi";

const DashBoardPage = () => {
  return (
    <section>
      <Container>
        <div className='xl:grid-cols-3 gap-4 grid-cols-1 grid sm:grid-cols-2'>
          <div className='col-span-1'>
            <Module name={"Product"} icon={<TfiDropbox className='size-14'/>} url={"/ProductPage"}/>
          </div>
          <div className='col-span-1'>
            <Module name={"Sale"} icon={<TfiShoppingCartFull className='size-14' />} url={"/SalePage"}/>
          </div>
          <div className='col-span-1'>
            <Module name={"Voucher"} icon={<TfiReceipt  className='size-14'/>} url={"/VoucherPage"}/>
          </div>
        </div>
      </Container>
    </section>
  )
}

export default DashBoardPage