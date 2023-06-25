import cheerio from 'cheerio'
export function render(pageData) {
   let $ = cheerio.load(pageData)
    let title  = $('title')
    title.text('UDS | Home')
    let h1 = $('h1')
    h1.text('UDS Home | Updated')
    pageData = $.html()
    return pageData
}
export default render