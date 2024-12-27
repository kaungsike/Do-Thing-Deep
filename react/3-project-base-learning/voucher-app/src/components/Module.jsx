import React from 'react'
import { Link } from 'react-router'

const Module = ({name,icon,url}) => {
  return (
    <Link className='w-full h-[200px] p-2 flex flex-col items-center justify-center bg-slate-600 text-white' to={url}>
            {icon}
            <br />
            {name}
    </Link>
  )
}

export default Module