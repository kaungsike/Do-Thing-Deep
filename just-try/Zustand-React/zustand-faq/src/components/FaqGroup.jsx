import React from 'react'
import useFaq from '../store/useFaq'
import Faq from './Faq';

const FaqGroup = () => {

    const {faqs} = useFaq();

  return (
    <div>
        {
            faqs.map(faq => (
                <Faq key={faq.id} faq={faq}/>
            ))
        }
    </div>
  )
}

export default FaqGroup