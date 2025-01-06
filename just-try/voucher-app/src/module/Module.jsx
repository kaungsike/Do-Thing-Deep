import React from 'react'
import { Link } from 'react-router-dom'

const Module = ({title,url,icon}) => {
  return (
    <Link to={url}>
    <div className='border border-gray-200 p-5 rounded-lg flex items-center justify-center flex-col h-[180px]'>
        {icon}
        {title}
    </div>
    </Link>
  )
}

export default Module