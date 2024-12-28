import React from 'react'
import { TfiTrash } from "react-icons/tfi";
import { SlNote } from "react-icons/sl";



const VoucherList = () => {
    return (
        <>
            <div className="relative bg-white overflow-x-auto shadow-md sm:rounded-lg pt-5">

                <div className='w-full pl-5 mb-5'>
                    <h3 className='text-lg font-bold'>Voucher Lists</h3>
                </div>


                <table className="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead className="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" className="px-6 py-3">
                                #
                            </th>
                            <th scope="col" className="px-6 text-center py-3">
                                Customer name
                            </th>
                            <th scope="col" className="px-6 text-center py-3 ">
                                Email
                            </th>
                            <th scope="col" className="px-6 py-3 text-center">
                                Created At
                            </th>
                            <th scope="col" className="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr className="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td className="px-6 py-4">
                                1
                            </td>
                            <th scope="row" className="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
                                Soe Ei
                            </th>
                            <td className="px-6 py-4 text-center">
                               soei@gmail.com 
                            </td>
                            <td className="px-6 py-4 text-center">
                            <p>16.12.2024</p>
                            <p>3:56 pm</p>
                            </td>
                            <td className="px-6 py-4">
                                <div className='flex items-center gap-3'>
                                    <a href="#" className="font-medium text-blue-600 dark:text-blue-500 hover:underline"><SlNote className='size-5' /></a>
                                    <a href="#" className="font-medium text-red-600 dark:text-red-500 hover:underline"><TfiTrash className='size-5' /></a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>


        </>
    )
}

export default VoucherList