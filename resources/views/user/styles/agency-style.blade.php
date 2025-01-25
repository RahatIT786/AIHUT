<!-- Responsive styling via media queries -->
<style>
    @media (max-width: 768px) {
        .benifit-item {
            width: 100% !important;  /* Make each item 100% width on smaller screens */
        }
        .d-flex {
            flex-direction: column; /* Stack the items vertically on small screens */
        }

        #agent-revenue{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        {{-- #agent-get-tick{
            border: 1px solid black;
            img{
                width: 10vw;
            }
           
            div{
               
            }
        }
        #fdjljf{
            width: fit-content;
        } --}}
    }
</style>